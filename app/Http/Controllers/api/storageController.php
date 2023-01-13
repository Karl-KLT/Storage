<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\repositories\loginRepository;
use Illuminate\Support\Facades\Storage;


class storageController extends Controller
{

    protected $loginRepository;
    public function __construct(loginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }



    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register()
    {
        $validate = request()->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
        ]);

        if($validate){

            if($this->loginRepository->register($validate)){

                return response()->json(['message'=>'ur account has registred','success' => true,'status'=>200], 200);

            }

            return response()->json(['message'=>"can't create account",'success' => false,'status'=>401], 401);

        }

        return response()->json(['message'=>"confirm password not the same of password",'success' => false,'status'=>401], 401);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'success' => true,
            'status' => 200,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    // settings for api

    // create table
    public function createTable()
    {
        setDataToDB(request()->name);
        return response()->json(['message'=>'successfully','status'=>200]);
    }

    // show storage
    public function showStorage()
    {
        return response()->json(['tables'=>getDB()->getStorage,'message'=>'successfully','status'=>200]);

    }

    // get storage
    public function getStorage($name, $path = null)
    {
        if (getDB_ByName($name)) {

            if($path && !Storage::exists(getDB_ByName($name)->storage.'/'.$path ?: '')){

                return response()->json(['message'=>'folder not found','status'=>404,'success'=>false]);

            }

            return response()->json(['path'=>($path ? '/'.$path : '/'),'data' => getStorage($name, $path, request()->handel), 'success' => true, 'status' => 200]);

        }

        return response()->json(['success' => false, 'status' => 404, 'message' => 'table not found']);
    }
    // set storage
    public function setStorage($name, $path = null)
    {
        if(getDB_ByName($name)){

            if(request()->hasFile('file')){

                request()->file('file')->storeAs(getDB_ByName($name)->storage.'/'.$path ?: '',request()->file('file')->getClientOriginalName());

                return response()->json(['path'=>($path ? '/'.$path : '/'),'data' => getStorage($name, $path, request()->handel), 'success' => true, 'status' => 200]);

            }

            if(request()->file){

                Storage::put(getDB_ByName($name)->storage.($path ? '/'.$path.'/' : '/').request()->file,'');

                return response()->json(['path'=>($path ? '/'.$path : '/'),'data' => getStorage($name, $path, request()->handel), 'success' => true, 'status' => 200]);

            }

            if(request()->folder){
                Storage::makeDirectory(getDB_ByName($name)->storage.($path ? '/'.$path.'/' : '/').request()->folder);

                return response()->json(['path'=>($path ? '/'.$path : '/'),'data' => getStorage($name, $path, request()->handel), 'success' => true, 'status' => 200]);

            }

            return response()->json(['success' => false, 'status' => 500, 'message' => 'not found any command, please use file or folder in body to create new one']);

        }

        return response()->json(['success' => false, 'status' => 404, 'message' => 'table not found']);

    }

    // delete storage
    public function deleteStorage($name,$path = null)
    {
        if(getDB_ByName($name)){

            if(request()->file){
                if(Storage::exists(getDB_ByName($name)->storage.($path ? '/'.$path.'/' : '/').request()->file)){

                    Storage::delete(getDB_ByName($name)->storage.($path ? '/'.$path.'/' : '/').request()->file);

                    return response()->json(['success' => true, 'status' => 200, 'message' => 'file deleted successfully']);

                }

                return response()->json(['success' => false,'message'=>'file not found','status'=>404]);
            }

            if(request()->folder){

                if(Storage::exists(getDB_ByName($name)->storage.($path ? '/'.$path.'/' : '/').request()->folder)){

                    Storage::deleteDirectory(getDB_ByName($name)->storage.($path ? '/'.$path.'/' : '/').request()->folder);

                    return response()->json(['success' => true, 'status' => 200, 'message' => 'folder deleted successfully']);

                }

                return response()->json(['success' => false,'message'=>'folder not found','status'=>404]);
            }

            return response()->json(['success' => true, 'status' => 200, 'message' => 'file deleted successfully']);
        }

        return response()->json(['success' => false, 'status' => 404, 'message' => 'table not found']);
    }
}

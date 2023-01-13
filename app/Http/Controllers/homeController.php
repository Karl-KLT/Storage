<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use App\Providers\RouteServiceProvider;
use App\repositories\loginRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    protected $loginRepository;

    public function __construct(loginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }


    // login / register
    public function login()
    {
        return view('login.index');
    }

    public function Auth(Request $Request)
    {
        if($this->loginRepository->login($Request)){
            return redirect(route('settings.home'));
        }
        return redirect()->back();
    }


    public function signUp_Route()
    {

        return view('login.create.index');
    }


    public function register(registerRequest $Request)
    {
        $reg = $this->loginRepository->register($Request);
        if($reg){
            return redirect(route('login'));
        }

        return redirect()->back();
    }

    public function logOut()
    {
        if($this->loginRepository->logout()){
            return redirect(route('Auth'));
        }
        return redirect(route('Home'));
    }
}

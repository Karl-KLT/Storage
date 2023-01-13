<?php

use Illuminate\Support\Carbon;
use App\Models\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// construct
function API_URL()
{
    return env('API_URL',Request()->root());
}
// end
function setDataToDB($name){
    try{
        // DB -> name of the DB / database.sqlite + storage directory
        // link storage DB
        $path = 'public/DB/'.$name.'/'; // with / for end

        try{
            // add storage
            // Storage::put($path.'database.sqlite', '');
            Storage::makeDirectory($path.'storage');

        }catch(Throwable $e){dd($e);}

        try{
            // add storage
            DB::create(['name'=>$name,'storage'=>$path.'storage','user_id'=>auth()->id()]);
        }catch(Throwable $e){dd($e);}
        // end link

        return true;
    }catch(Throwable $e){
        return false;
    }
}

function getDB_ByName($name){
    return getDB()->getStorage->where('name',$name)->first() ?: false;
}

function getDB(){
    return auth()->user() ?: false;
}

function getStorage(string $name, $path = null, bool $handel = false){

    $Files = Storage::files(getDB_ByName($name)->storage.($path ? '/'.$path.'/' : '/'));
    $FilesWithHandel = [];

    $Dirs = Storage::directories(getDB_ByName($name)->storage.'/'.$path ?: '');
    $DirsWithHandel = [];

    for ($i=0; $i < count($Files); $i++) {
        array_push($FilesWithHandel,basename($Files[$i]));
    }

    for ($i=0; $i < count($Dirs); $i++) {
        array_push($DirsWithHandel,basename($Dirs[$i]));
    }

    return ['Dirs'=>$handel ? $DirsWithHandel : $Dirs,'Files'=>$handel ? $FilesWithHandel : $Files];
}

function carbonTimerForHuman($created_at)
{
    return Carbon::create($created_at)->diffForHumans(null,true,true);
}

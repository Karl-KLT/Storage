<?php

namespace App\repositories;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class loginRepository
{
    public function login($Request)
    {
        if(Auth::attempt($Request->only('email','password'),true)){
            return true;
        }
        return false;
    }

    public function register($Request)
    {
        try{
            User::create([
                'first_name'=>$Request->first_name,
                'last_name'=>$Request->last_name,
                'gender'=>$Request->gender,
                'email'=>$Request->email,
                'password'=>Hash::make($Request->password),
            ]);

            return true;
        }catch(Throwable $e){
            dd($e);
            return false;
        }
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logOut();
            return true;
        }
        return false;
    }
}

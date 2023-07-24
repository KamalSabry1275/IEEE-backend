<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    use HasApiTokens;

    public function login(Request $request){
        $user = ['name' => $request->name,
                 'email'=>$request->email,
                 'password'=> $request->password];

        if(Auth::attempt($user))
        {
            session()->regenerate();

            if($request->name === env("ADMIN_NAME") &&
               $request->email === env("ADMIN_EMAIL") &&
               $request->password === env("ADMIN_PASSWORD") ){
                $request->user()->tokens()->delete();
                $success['token'] =  $request->user()->createToken('login',["admin"])->plainTextToken;
            }else{
                $request->user()->tokens()->delete();
                $success['token'] =  $request->user()->createToken('login',["user"])->plainTextToken;
            }

            return redirect("users");
        }else{
            return redirect("login");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect("login");
    }
}
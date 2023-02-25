<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){

        return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

    }

    public function login(Request $request){
        if(!Auth::attempt($request->only('email', 'password'))){
            return response([
                'message' => 'Invalid credentials',
            ], Response::HTTP_UNAUTHORIZED);
        };

        $user = Auth::user();

        $token = $user->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $token, 60 * 24);

        return \response([
            'message' => 'Success'
        ])->withCookie($cookie);
    }

    public function logout(){
        $cookie = Cookie::forget('jwt');

        return \response([
            'message' => 'sucess',
        ])->withCookie($cookie);
    }

    public function user(){
        return Auth::user();
    }


    public function users(){
        return User::all();
    }
}

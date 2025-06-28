<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\WeightLog;
use App\Models\WeightTarget;

class AuthorController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function step1(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect('/register/step2');
    }

    public function register2(){
        return view('auth.register2');
    }


}

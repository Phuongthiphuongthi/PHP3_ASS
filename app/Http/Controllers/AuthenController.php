<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    public function showLogin(){
        return view('layout.auth.login');


    }
    public function handLogin(){
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            //attempt: lấy dl user,ss passw trong db, login


            /**
             * @var User $user
             */
            $user = Auth::user();
            if ($user->isAdmin()){
                return redirect()->route('index_ad');

            }
            return redirect()->route('index');

        }

        return back()
        ->withErrors([
            'email' => 'Thông tin xác thực được cung cấp không khớp với hồ sơ của chúng tôi.',
        ])
        ->onlyInput('email');


    }
    public function showLogup(){
        return view('layout.auth.logup');


    }
    public function handLogup(){
       $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
        $user = User::query()->create($data);

        Auth::login($user);
        //đăng nhập luôn

        // request()->session()->regenerate();

        return redirect()->route('index');
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }



    function showForgot(){
        return view('layout.auth.quenmatkhau');
    }

}

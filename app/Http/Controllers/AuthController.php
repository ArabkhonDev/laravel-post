<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register_store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            // 'name'=> 'required|unique:users,name',
            'email' => 'required|email:rfc, dns|unique:user, email',
            'password' => 'required|min:8',
            'confirm_password' => 'rquired|same:password'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=>$request->password,
        ]);

        // $user = User::create($use);
        auth()->login($user);

        return redirect('/')->with('success', 'Account successfuly registered');

        dd($request);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('/');
    }
}

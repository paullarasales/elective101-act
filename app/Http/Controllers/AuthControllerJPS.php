<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthControllerJPS extends Controller
{
    public function showSignUpForm()
   {
        return view('auth.signup');
   }

   public function signup(Request $request)
   {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = UserAccount::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        $request->session()->put('user', $user);

        return redirect()->route('main');

   }

   public function showLoginForm()
   {
        return view('auth.login');
   }

   public function login(Request $request)
   {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string'
        ]);

        $user = UserAccount::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('user', $user);
            return redirect()->route('main');
        }

        return back()->withErrors(['message' => 'Credentials did not match']);
   }

   public function logout(Request $request)
   {
        $request->session()->forget('user');
        return redirect()->route('login');
   }


   public function dashboard()
   {
        return view('welcome');
   }
}

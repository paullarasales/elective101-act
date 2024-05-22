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

   public function updateProfile(Request $request) {
     $request->validate([
         'firstname' => 'required|string|max:255',
         'lastname' => 'required|string|max:255',
         'username' => 'required|string|max:255',
     ]);

     $user = $request->session()->get('user');
     $user->firstname = $request->firstname;
     $user->lastname = $request->lastname;
     $user->username = $request->username;
     $user->save();

     // Update session data
     $request->session()->put('user', $user);

     return redirect()->route('profile')->with('status', 'Profile updated successfully!');
 }

   public function logout(Request $request)
   {
        $request->session()->forget('user');
        return redirect()->route('login');
   }

   public function deleteAccount(Request $request)
{
    // Retrieve the user information
    $user = $request->session()->get('user');

    // If user information exists
    if ($user) {
        // Perform any additional cleanup tasks if necessary
        // For example, delete related records in other tables

        // Delete the user account from your storage system (e.g., database)
        // Assuming you have a User model representing your users
        UserAccount::where('id', $user->id)->delete();

        // Forget or delete the session data
        $request->session()->forget('user'); // or $request->session()->flush();

        return redirect()->route('login')->with('status', 'Your account has been deleted successfully.');
    }

    // If user information doesn't exist in the session
    return back()->withErrors(['message' => 'Unable to delete account.']);
}

}

<?php

namespace App\Http\Controllers\logs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class BOD_login_controller extends Controller
{
    public function bodLogin(){
        return view('auth.BOD_login');
    }

    public function authenticate_bod(Request $request)
    {
        // Validate the username and password from the form
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->route('auth.BOD_login')
                ->withErrors($validator) // Send validation errors to the view
                ->withInput(); // Repopulate the form fields with old input
        }

        // Attempt to authenticate the user
        if (Auth::attempt($request->only('username', 'password'))) {
            $user = Auth::user();

            // Redirect based on admin status
            if ($user->admin == 1) {
                return redirect()->route('1st_admin.dashboard');
            } elseif ($user->admin == 0) {
                return redirect()->route('1st_admin.BOD (view only).BOD_dashboard');
            }
        }

        // If authentication fails or user not authorized, redirect to welcome with an error message
        return redirect()->route('auth.BOD_login')->with('error', 'Invalid credentials or user not authorized');

    }

public function logout()
{
    Auth::logout();

    // Redirect to the welcome page or any other page you prefer after logout
    return redirect()->route('welcome');
}
}

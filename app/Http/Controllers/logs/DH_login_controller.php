<?php

namespace App\Http\Controllers\logs;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class DH_login_controller extends Controller

{



    public function dhLogin(){
        return view('auth.DH_login');
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
        return redirect()->route('auth.DH_login')
            ->withErrors($validator) // Send validation errors to the view
            ->withInput(); // Repopulate the form fields with old input
    }

    // Attempt to authenticate the user
    if (Auth::attempt($request->only('username', 'password'))) {
        $user = Auth::user();

        // Redirect based on admin status
        switch ($user->admin) {
            case 2:
                return redirect()->route('2nd_admin.AM.am_dashboard');
                break;
            case 3:
                return redirect()->route('2nd_admin.EXECUTIVE.executive_dashboard');
                break;
            case 4:
                return redirect()->route('2nd_admin.HR.hr_dashboard');
                break;
            case 5:
                return redirect()->route('2nd_admin.IA.ia_dashboard');
                break;
            case 6:
                return redirect()->route('2nd_admin.MMD (Marketing).mmd_dashboard');
                break;
            default:
                return redirect()->route('auth.DH_login')->with('error', 'User not authorized');
        }
    }

    // If authentication fails or user not authorized, redirect to welcome with an error message
    return redirect()->route('auth.DH_login')->with('error', 'Invalid credentials or user not authorized');
}
public function logout()
{
    Auth::logout();

    // Redirect to the welcome page or any other page you prefer after logout
    return redirect()->route('welcome');
}
}

<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function index()
    {
    	return view('auth.admin_login');
    }

    public function login(Request $request)
    {
    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) 
    	{
    		// The user is being remembered...
    		return redirect()->intended(route('admin.dashboard'));
		} else {
            return redirect()->back()->WithErrors('Wrong credentials!');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        return redirect(route('admin.login'));
    }
}

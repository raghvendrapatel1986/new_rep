<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
    	$credentials = array('email'=>'user@gmail.com','password'=>1234561);
        //$credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
        	echo 'hiiii'; die;
            // Authentication passed...
            return redirect()->intended('dashboard');
        }else{
        	echo 'Bye';
        }
    }
}

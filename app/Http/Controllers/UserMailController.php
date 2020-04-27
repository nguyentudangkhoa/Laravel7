<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMailController extends Controller
{
    protected $redirectTo = '/dashboard';
    public function signUp(){
        return view('signUp');
    }
}

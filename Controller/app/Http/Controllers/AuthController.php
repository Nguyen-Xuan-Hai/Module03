<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    function showFromRegister(){
        return view('admin.register');
    }
}

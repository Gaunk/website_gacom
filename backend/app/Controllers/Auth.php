<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('temp/layout');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        
    }
    public function logout()
    {
        
    }
}

<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}

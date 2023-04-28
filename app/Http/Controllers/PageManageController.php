<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageManageController extends Controller
{
    //

    public function login()
    {
           return view('legalconnect.login');
    }

    public function register()
    {
           return view('legalconnect.register');
    }
}

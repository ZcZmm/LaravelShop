<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }

    public function login()
    {
        return view('admins/login');
    }

}

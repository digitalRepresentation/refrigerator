<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        echo "abc";
        exit;
        return view('login');
    }
}

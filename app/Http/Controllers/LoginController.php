<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//認証
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

        /**
     * SignUpの引数を取得するメソッド
     *
     * @var Request $request
     */
    public function customLogin(Request $request) {

        //Validation Check
        $this->validate($request, [
            'name' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            echo "true";
            exit;
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }
}

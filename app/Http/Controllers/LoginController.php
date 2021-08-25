<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//認証
use Illuminate\Support\Facades\Auth;
//exception
use Exception;
use Illuminate\Support\Facades\Hash;

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
        try{    
            // your code here.    
        
        $this->validate($request, [
            'name' => ['required'],
            'password' => ['required'],
        ]);

        //$credentials = $request->only('ㅜ', 'password');

        

        if (Auth::attempt(['MEMBER_NAME'=>$request->input('name'),'MEMBER_PASSWORD'=>Hash::check($request->input('password'))])) {
            echo "true";
            exit;
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
        echo "false";
        exit;
        return redirect("login")->withSuccess('Login details are not valid');
        }catch(Exception $e){    
            dd($e);    
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//exception
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
        
        try{    
            session_start();
           
        //name値
        $name = $request->input('name');
        //password値
        $password = $request->input('password');
        
        //Validation Check
        $this->validate($request, [
            'name' => ['required'],
            'password' => ['required'],
        ]);
        

        //loginするIDのパスワード確認
        $loginPassword = DB::table('member')->where('MEMBER_NAME', $name)->value('MEMBER_PASSWORD');


        //idがあるかつ、DB上のidとpasswordが一致する場合
        if(isset($loginPassword) && hash::check($password, $loginPassword)){
            session()->put('user',$name);
            return redirect('/');
        }
        //失敗した場合
        return redirect("login")->withSuccess('IDまたはPasswordが正しくないです。');
        }catch(Exception $e){    
            dd($e);    
        }
    }

    /**
     * logout処理
     *
     * @var Request $request
     */
    public function logout(Request $request) {
        try{  
        //
        $request->session()->flush();
        return redirect('/');
        }catch(Exception $e){    
            dd($e);    
        }
    }

}

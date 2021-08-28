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
        
        //refeactoring1
        //$request -> only('name', 'password');

        //Validation Check
        $this->validate($request, [
            'name' => ['required'],
            'password' => ['required'],
        ]);
        


        //refeactoring2
        //$request -> validate($request -> only('name', 'password'), [벨리데이터배열]);
        //$request -> validate($request -> only('name', 'password'), [
            // 'name' => ['required'],
            // 'password' => ['required'],
            // ]);

        //loginするIDのパスワード確認
        $loginPassword = DB::table('member')->where('MEMBER_NAME', $name)->value('MEMBER_PASSWORD');


        //idがあるかつ、DB上のidとpasswordが一致する場合
        if(isset($loginPassword) && hash::check($password, $loginPassword)){
            return redirect('/');
        }

        return redirect("login")->withSuccess('IDまたはPasswordが正しくないです。');
        }catch(Exception $e){    
            dd($e);    
        }
    }
}

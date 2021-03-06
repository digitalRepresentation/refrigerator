<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SignUpController extends Controller
{
    

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index() {
        return view('signup');
    }

    /**
     * SignUpの引数を取得するメソッド
     *
     * @var Request $request
     */
    public function signupCreate(Request $request) {
        
        session_start();

        //Validation Check
        $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'password' => ['required', 'string', 'min:8'],
            'address' => ['required', 'string', 'min:4', 'max:100'],
        ]);

        

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $address = $request->input('address');
        
        //重複されるidがあるのか確認
        $memberNameCheck = DB::table('member')->where('MEMBER_NAME', $name)->value('MEMBER_NAME');

        //重複idがない場合
        if(!isset($memberNameCheck)){
        $signupData = array(
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "address" => $address,
         );
        
        $this->signupDataInsert($signupData);

        
        return view('welcome');
        }

        //重複idがない場合
        return back()->withInput()->with('error', 'idが重複されています。');

    }

    /**
     * data insert処理
     *
     * @var array $signupData
     */
    public function signupDataInsert(array $signupData) {
        try {
        //memberテーブル作成
        DB::table('member')->insert([
            [
                'MEMBER_NAME' => $signupData["name"], 
                'MEMBER_PASSWORD' => Hash::make($signupData["password"]), 
                'MEMBER_ADDRESS' => $signupData["address"], 
                'MEMBER_EMAIL' => $signupData["email"]
            ]
        ]);
        } catch (\Exception $e) {
            report($e);
            echo 'Connection failed: ' . $e->getMessage();
        }
        
    }
}

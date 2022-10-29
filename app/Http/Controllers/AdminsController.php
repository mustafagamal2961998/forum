<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    //Admin Login Method
    public function AdminLogin(Request $request){


         if ($AdminLogin = Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])){
            $adminData = Auth::guard('admin')->user();
             return response()->json(['status'=>'success' ,'data'=>$adminData,'token' => $this->createNewToken($AdminLogin)]);
         }


    }


    public function test(){
        $adminData = Auth::guard('admin')->user();
        return response()->json(['status'=>'success' ,'data'=>$adminData]);

    }


    // create token method
    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth('admin')->user()
        ]);
    }

    public function username()
    {
//        $value = \request()-> input('username');
//        $field = filter_var($value,FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
//        \request()->merge([$field =>$value ]);

        return 'username';
    }
}

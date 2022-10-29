<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    use AuthenticatesUsers;
    //User Login Method
    public function login(Request $request){

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|exists:users,username',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'fail', 'msg' => $validator->getMessageBag()->first()]);
        }

        // Check if email verify or not
        $checkEmail_Verify = User::select('id','dir','lang','email_verify_state')->where('username', $request->username)->first();
        if ($checkEmail_Verify->email_verify_state > 0) {
                    if($setToken = Auth::attempt(['username' => $request->username, 'password' => $request->password,'email_verify_state' => 1])){
                        if ($setToken) {

                            // Update User online
                            $UpdateOnline = User::find($checkEmail_Verify->id)->update([
                               'online'=>1
                           ]);

                           if ($UpdateOnline){

                               return response()->json(['status'=>'success' ,'dir'=>$checkEmail_Verify->dir,'lang'=>$checkEmail_Verify->lang, 'token' => $this->createNewToken($setToken)]);
                           }



                        }
                    } else {
                        return response()->json(['fail'=>'Login is incorrect']);
                    }

        } else {
             return response()->json(['status' => 'fail', 'msg' => 'This User not verify']);
         }


    }


    // create token method
    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
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

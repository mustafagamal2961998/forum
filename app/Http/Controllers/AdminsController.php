<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Department;
use App\Models\Title_department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminsController extends Controller
{
    //Admin Login Method
    public function AdminLogin(Request $request){


//        $validator = Validator::make($request->all(), [
//            'username' => 'required|string|exists:admins,username',
//            'password' => 'required|min:6'
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json(['status' => 'fail', 'msg' => $validator->getMessageBag()->first()]);
//        }
            $GetAdminByID = Admin::select('id')->where('username',$request->username)->first();


            $AdminLogin = Auth::guard('admin')->login($GetAdminByID);


         if ($AdminLogin){

             return response()->json(['status'=>'success' ,'token' => $this->createNewToken($AdminLogin)]);
         }


    }


    public function test(){
        $adminData = Auth::guard('admin')->user();
        return response()->json(['status'=>'success' ,'data'=>$adminData]);

    }






   // Add New Department Title
   public function AddNewDepartmentTitle(Request $request){


          $AddNewDepartmentTitle = Title_department::create([
            'department_title'=>$request->DepartmentTitleName
          ]);

//          $AddNewDepartment = Department::create([
//            'department_name'=>$request->DepartmentName,
//            'department_description'=>'الوصف',
//             'title_department_id'=>$AddNewDepartmentTitle->id
//          ]);


          if ($AddNewDepartmentTitle){
              return response()->json(['status'=>'success']);
          }


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

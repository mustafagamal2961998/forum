<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Get All Online Users Method
    public function GetOnlineUsers(){
        $OnlineUser = User::select()->where('online','>',0)->get();

        return response()->json(['status'=>'success' ,'OnlineUsers'=>$OnlineUser]);

    }
}

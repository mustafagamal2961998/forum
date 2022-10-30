<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;

class TopicController extends Controller
{
    //Get All Topics Methods
    public function GetTopic(Request $request){

        $DepartmentName = Department::select()->where('id',$request->id)->with('TitleDepartment')->first();
        $AllTopicsByDepartmentId= Topic::orderBy('id', 'DESC')->select()->where('department_id',$request->id)->with('user','comments.user')->paginate(10);
        return response()->json(['AllTopicDataByDepartment'=>$AllTopicsByDepartmentId,'DepartmentName'=>$DepartmentName]);

    }

    // Get topic by id
    public function GetTopicById(Request $request){
        $GetTopicById = Topic::select()->where('id',$request->id)->with('user')->first();
        return response()->json(['data'=>$GetTopicById]);
    }

    // Add New Topic Method
    public function AddNewTopic(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|main:10',
            'content' => 'required|min:10'
        ]);


        $AddNewTopic = Topic::create([
            'topic_title'=>$request->title,
            'topic_content'=>$request->Content,
            'department_id'=>$request->DepartmentID,
            'user_id'=>Auth::user()->id,
        ]);

        return response()->json(['data'=>$AddNewTopic]);
    }


    // Live search method
    public function LiveSearch($query){
         $LiveSearchOn = Topic::where('topic_title','like','%'.$query.'%')->get();
         if ($LiveSearchOn){
             return response()->json(['status'=>'success','Result'=>$LiveSearchOn]);
         }


    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    //Get All Topics Methods
    public function GetTopic(Request $request){

        $DepartmentName = Department::select()->where('id',$request->id)->with('TitleDepartment')->first();
        $AllTopicsByDepartmentId= Topic::select()->where('department_id',$request->id)->with('user','comments.user')->paginate(1);
        return response()->json(['AllTopicDataByDepartment'=>$AllTopicsByDepartmentId,'DepartmentName'=>$DepartmentName]);

    }
}

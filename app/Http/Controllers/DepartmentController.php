<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Title_department;
use App\Models\Topic;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //Get All departments method
    public function GetDepartments(){

        $GetAllDepartmentWithTitle =Title_department::with('departments.topics.user','departments.DepartmentAdmin.user')->get();

         return response()->json(['ResponseData'=>$GetAllDepartmentWithTitle]);


    }
}

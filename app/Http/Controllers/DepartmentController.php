<?php

namespace App\Http\Controllers;

use App\Models\Title_department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //Get All departments method
    public function GetDepartments(){
        $GetAllDepartmentWithTitle =Title_department::with('departments')->get();
        return response()->json(['ResponseData'=>$GetAllDepartmentWithTitle]);

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable=[
        'department_name',
        'department_description',
        'title_department_id'
    ];


    // START RELATIONSHIPS
    public function TitleDepartment(){
        return $this->belongsTo(Title_department::class);
    }

    public function topics(){
        return $this->hasMany(Topic::class);
    }
    public function DepartmentAdmin(){
        return $this->hasOne(Department_admin::class);
    }


//    public function comments(){
//        return $this->hasMany(Comment::class,'topic_id');
//    }
    // END RELATIONSHIPS

}

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
        'department_description'
    ];


    // START RELATIONSHIPS
    public function TitleDepartment(){
        return $this->belongsTo(Title_department::class);
    }

    public function topics(){
        return $this->hasMany(Topic::class);
    }

    // END RELATIONSHIPS

}
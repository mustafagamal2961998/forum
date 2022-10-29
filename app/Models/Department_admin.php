<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department_admin extends Model
{
    use HasFactory;
    public $fillable=[
        'user_id',
        'department_id'
    ];


    // START RELATIONSHIPS

    public function Department(){
        return $this->belongsTo(Department::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    // END RELATIONSHIPS
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title_department extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable=[
      'department_title'
    ];

    // START RELATIONSHIPS
    public function departments(){
        return $this->hasMany(Department::class);
    }
    // END RELATIONSHIPS

}

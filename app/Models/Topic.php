<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable=[
     'topic_title',
     'topic_content',
     'department_id',
     'user_id'
    ];

    // START RELATIONSHIPS
    public function departments(){
        return $this->belongsTo(Department::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // END RELATIONSHIPS
}

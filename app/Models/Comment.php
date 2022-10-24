<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable=[
        'comment_content',
        'topic_id',
        'user_id'
    ];


    // START RELATIONSHIPS

    public function topic(){
        return $this->belongsTo(Topic::class);
    }
//    public function department(){
//        return $this->belongsTo(Department::class);
//    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    // END RELATIONSHIPS
}

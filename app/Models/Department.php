<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $timestamps = false;



    // START RELATIONSHIPS
    public function title_department(){
        return $this->belongsTo(Title_department::class);
    }
    // END RELATIONSHIPS

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resit extends Model
{
    use HasFactory;
       protected $fillable = [
            'firstname' ,
            'lastname' ,
            'programme',
            'email' ,
            'sid',
            'department' ,
            'contact' ,


            'course_code',
            'academic_year',
            'course_title' ,
            'name_of_lecturer' ,

            'transaction_id',

       ];

       
   public function user(){
        return $this->belongsTo(User::class);
    }
}

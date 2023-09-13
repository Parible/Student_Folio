<?php

namespace App\Models;


use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;



use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    
        protected $fillable = [
        'name',
        'email',
        'password',
    ];

    //     public function admin()
    // {
    //     return $this->hasMany(Transcripts::class,Internships::class,Resit::class);
    // }
    

}

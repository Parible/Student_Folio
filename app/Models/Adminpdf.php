<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPDF extends Model
{

    use HasFactory;
    protected $fillable = ['pdf'];
    
    
   public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}


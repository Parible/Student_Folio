<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transcripts extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'programme',
        'level',
        'session',
        'image',
        'pdf',
        'sid',
        'campus',
        'contact',
        'dob',
        
        'request_type',
        'transaction_id',
        
       
     ];
     
     public function scopeFilter($query, array $filters )
     {
         if($filters['search'] ?? false) {
            $query->where('firstname', 'like', '%' . request('search') . '%')
                ->orWhere('lastname', 'like', '%' . request('search') . '%')
                ->orWhere('programme', 'like', '%' . request('search') . '%')
                ->orWhere('level', 'like', '%' . request('search') . '%')
                ->orWhere('session', 'like', '%' . request('search') . '%')
                ->orWhere('sid', 'like', '%' . request('search') . '%')
                ->orWhere('campus', 'like', '%' . request('search') . '%')
                ->orWhere('contact', 'like', '%' . request('search') . '%')
                ->orWhere('dob', 'like', '%' . request('search') . '%')
                ->orWhere('transaction_id', 'like', '%' . request('search') . '%')
               
                ->orWhere('request_type', 'like', '%' . request('search') . '%');
        }
     }

   public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    //  public function find($id)
    //  {
    //     $transcripts = self::all();

    //     foreach($transcripts as $transcript){
    //         if($transcript['id'] == $id ){
    //             return $transcript;
    //         }
    //     }
    //  }
}

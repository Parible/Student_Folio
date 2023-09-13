<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDF extends Model
{
    protected $fillable = [ 'firstname',
            'lastname',
            'programme',
            'level',
            'contact',
            'title',
            'department',
            'type',];
}


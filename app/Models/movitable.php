<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movitable extends Model
{
    protected $table = 'movitable';
    protected $fillable =[
        'img',
        'title',
        'publicationdate',
        'runtime',
        'description'
    ];

}

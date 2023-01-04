<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstModel extends Model
{
    use HasFactory;
/*What we want to store in the database */
    protected $fillable = [
        'title',
        'author',
        'published',
        'status'
    ];
}

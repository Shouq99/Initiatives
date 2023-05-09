<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class websiteform extends Model
{
    use HasFactory;

     protected $table = 'websiteforms';


    protected $fillable = [
        'name',
        'number',
        'color',
        'email',
        'status',
        'budget',
        'subjects',
        'requests'
    ];
}

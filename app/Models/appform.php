<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appform extends Model
{
    use HasFactory;
    protected $table = 'appforms';


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

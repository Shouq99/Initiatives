<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class designform extends Model
{
    use HasFactory;
    protected $table = 'designforms';


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

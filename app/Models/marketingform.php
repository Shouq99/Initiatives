<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marketingform extends Model
{
    use HasFactory;
    protected $table = 'marketingforms';


    protected $fillable = [
        'name',
        'number',
        'email',
        'status',
        'budget',
        'requests'
    ];
}

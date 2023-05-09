<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class techsupportform extends Model
{
    use HasFactory;
    protected $table = 'techsupportforms';


    protected $fillable = [
        'name',
        'number',
        'email',
        'status',
        'budget',
        'requests'
    ];
}

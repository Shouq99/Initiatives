<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hostingform extends Model
{
    use HasFactory;
    protected $table = 'hostingforms';


    protected $fillable = [
        'name',
        'number',
        'email',
        'status',
        'budget',
        'space',
        'bandwidth',
        'requests'
    ];
}

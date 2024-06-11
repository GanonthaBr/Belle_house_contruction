<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'content',
        'phone',
        'service',
    ];
    protected $table = 'modal'; // Explicitly setting the table name
}

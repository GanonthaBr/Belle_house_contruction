<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'task',
        'area',
        'city',
        'country',
        'year',
        'maitre_doeuvre',
        'video',
        'image'
    ];
    public function images()
    {
        return $this->hasMany('App\Models\RealisationImages');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisationImages extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'realisation_id'];
    public function realisation()
    {
        return $this->belongsTo(Realisation::class);
    }
}

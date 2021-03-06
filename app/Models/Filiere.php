<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function parcour()
    {
        return $this->belongsTo(Parcour::class);
    }
}

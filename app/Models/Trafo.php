<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trafo extends Model
{
    use HasFactory;

    protected $fillable = [
        'gardu_induk',
        'bay',
        'merk',
        'MVA'
    ];
}

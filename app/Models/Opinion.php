<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    /** @use HasFactory<\Database\Factories\OpinionFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'opinion',
    ];
}

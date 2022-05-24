<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Melding extends Model
{
    use HasFactory;
    protected $table = 'meldingen';

    protected $fillable = [
        'created_at',
    ];
}

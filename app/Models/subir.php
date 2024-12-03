<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subir extends Model
{
    use HasFactory;

    protected $table = 'subirs';

    protected $fillable = ['nombre', 'extensión'];
}

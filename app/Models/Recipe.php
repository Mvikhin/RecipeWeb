<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes'; // Specifies the table name

    protected $fillable = [
        'name',
        'title',
        'description',
        'added_date'
    ];
}

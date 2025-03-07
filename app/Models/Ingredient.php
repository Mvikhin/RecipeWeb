<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    // If needed, specify the table name
    protected $table = 'ingredients'; // Ensure your database table is named 'ingredients'

    // Specify the columns that are mass assignable
    protected $fillable = ['name']; // Example: assuming 'name' is the column you're searching on
}

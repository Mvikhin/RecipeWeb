<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeStep extends Model
{
    use HasFactory;

    protected $fillable = ['recipe_id', 'step_number', 'step_description'];

    // Define the relationship to the Recipe model
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}

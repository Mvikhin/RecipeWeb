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
        'slug',
        'description',
        'added_date'
    ];

    // Relationship: A recipe has many steps
    public function steps()
    {
        return $this->hasMany(RecipeStep::class)->orderBy('step_number');
    }
}

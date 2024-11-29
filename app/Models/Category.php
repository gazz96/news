<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $fillable = [
        'slug',
        'name',
        'description',
        'parent_id',
        'header_color'
    ];

    protected static function boot()
    {
        parent::boot();

        // Triggered after the category is created
        static::created(function ($category) 
        {
            // Check if the slug is empty, then generate it
            if (empty($category->slug)) 
            {
                $slug = strtolower(Str::slug($category->name)); // Generate slug from name
                $category->slug = self::generateUniqueSlug($slug, $category->id); // Ensure uniqueness
                $category->save(); // Save the slug to the database
            }
        });
    }

    // Generate a unique slug
    private static function generateUniqueSlug($slug, $id = null)
    {
        $originalSlug = $slug;
        $counter = 1;

        // Check if the slug already exists, ignoring the current category
        while (self::where('slug', $slug)->where('id', '<>', $id)->exists()) {
            $slug = $originalSlug . '-' . $counter++; // Append a counter to make it unique
        }

        return $slug;
    }
}

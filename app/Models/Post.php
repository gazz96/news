<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'publish_date',
        'user_id',
        'status',
        'thumbnail_url'
    ];

    public function categories()
    {
        return $this->hasMany(PostCategory::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Triggered after the category is created
        static::created(function ($model) 
        {
            // Check if the slug is empty, then generate it
            if (empty($model->slug)) 
            {
                $slug = strtolower(Str::slug($model->name)); // Generate slug from name
                $model->slug = self::generateUniqueSlug($slug, $model->id); // Ensure uniqueness
                $model->save(); // Save the slug to the database
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

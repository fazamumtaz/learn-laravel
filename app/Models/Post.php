<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['blogTitle', 'author', 'content'];
    protected $guarded = ['id'];
    protected $with = ['user', 'category'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('blogTitle', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('content', 'like', '%' . $filters['search'] . '%');
        // }

        // Null coalescing
        // $query->when($filters['search'] ?? false, function ($query, $search) {
        //     return $query->where('blogTitle', 'like', '%' . $search . '%')
        //         ->orWhere('content', 'like', '%' . $search . '%');
        // });

        // $query->when($filters['category'] ?? false, function ($query, $category) {
        //     return $query->whereHas('category', function ($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });

        $query->when($filters['search'] ?? false, function ($query, $search) {
            // Group the search conditions
            $query->where(function ($query) use ($search) {
                $query->where('blogTitle', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            // Apply the category filter
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['user'] ?? false, function ($query, $user) {
            // Apply the user filter
            return $query->whereHas('category', function ($query) use ($user) {
                $query->where('id', $user);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

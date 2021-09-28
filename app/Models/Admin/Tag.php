<?php

namespace App\Models\Admin;

use App\Models\Admin\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];


    // Relation
    public function posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}

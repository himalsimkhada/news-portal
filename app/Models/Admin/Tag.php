<?php

namespace App\Models\admin;

use App\Models\Admin\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function posts() {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}

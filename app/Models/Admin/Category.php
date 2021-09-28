<?php

namespace App\Models\Admin;

use App\Traits\HasSlug;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Category extends Model
{
    use LogsActivity, HasSlug;

    protected $guarded = [];

    // Forget cache on updating or saving and deleting
    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            self::cacheKey();
        });

        static::deleting(function () {
            self::cacheKey();
        });
    }

    // Cache Keys
    private static function cacheKey()
    {
        Cache::has('categories') ? Cache::forget('categories') : '';
    }

    // Logs
    protected static $logName = 'category';

    protected $parentColumn = 'category_id';

    protected $casts = [
        'meta_keywords' => 'array'
    ];

    // Relation
    public function parent()
    {
        return $this->belongsTo(Category::class, $this->parentColumn);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('categories');
    }

    // Scopes

    public function scopePositionCategory($query, $limit = 4)
    {
        return $query->with('children')->orderBy('position', 'desc')->take($limit);
    }
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}

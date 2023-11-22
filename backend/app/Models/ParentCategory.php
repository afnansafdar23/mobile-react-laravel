<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ParentCategory extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable =
    [
        'name',
        'description',
    ];

    public function ChildCategories()
    {
        return $this->hasMany(ChildCategory::class);
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, ChildCategory::class, 'parent_category_id', 'child_category_id');
    }
}

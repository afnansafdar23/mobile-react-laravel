<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ChildCategory extends Model implements HasMedia
{
    use HasFactory,  InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
        'parent_category_id',
    ];

    public function parentCategory()
    {
        return $this->belongsTo(ParentCategory::class, 'parent_category_id');
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
        'price',
        'availability',
        'key_feature',
        'color_id',
        'product_unique_id',
        'manufacturer',
        'sub_category_id',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('product.image')
            ->singleFile();
        // You can customize the collection settings according to your needs
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}

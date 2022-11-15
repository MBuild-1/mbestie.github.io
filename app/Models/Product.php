<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImages;
use App\Models\ProductHastags;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'brand',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'trending',
        'status',
        'meta_tittle',
        'meta_keyword',
        'meta_description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function ProductImages()
    {
        return $this->hasMany(ProductImages::class, 'product_id', 'id');
    }
    public function _ProductImages()
    {
        return $this->belongsTo(ProductImages::class, 'id', 'product_id');
    }
    public function Hasteg()
    {
        return $this->hasMany(Hastag::class, 'product_id', 'id');
    }
    public function _Hasteg()
    {
        return $this->belongsTo(Hastag::class, 'id', 'product_id');
    }
    public function ProductHastags()
    {
        return $this->hasMany(ProductHastags::class, 'product_id', 'id');
    }
    public function _ProductHastags()
    {
        return $this->belongsTo(ProductHastags::class, 'id', 'product_id');
    }
}

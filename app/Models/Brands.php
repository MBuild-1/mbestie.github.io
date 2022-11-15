<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Brands extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $fillable = [
        'name',
        'slug',
        'image',

    ];
    public function Products()
    {
        return $this->hasMany(Product::class, 'brand', 'name');
    }
}

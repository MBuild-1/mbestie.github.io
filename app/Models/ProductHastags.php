<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductHastags extends Model
{
    use HasFactory;

    protected $table = 'product_hastags';
    protected $fillable = [
        'product_id',
        'hastags_id',
        'hastag_status',
    ];

    public function _ProductHastags()
    {
        return $this->belongsTo(Hastag::class, 'hastags_id', 'id');
    }
}

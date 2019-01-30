<?php

namespace App\Domain\Product\Entities;

use App\Domain\Category\Entities\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'stock', 'price', 'category_id',
    ];

    public function category()
    {
        $this->belongsTo(Category::class, 'category_id');
    }
}

<?php

namespace App\Domain\Category\Entities;

use App\Domain\Product\Entities\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_At'
    ];

    public function products()
    {
        $this->hasMany(Product::class);
    }
}

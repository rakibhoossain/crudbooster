<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product', 'products_id', 'categories_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag', 'products_id', 'tags_id');
    }
}

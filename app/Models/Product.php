<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mysql_website';
    protected $guarded = [];

    // public function images(){
    //     return $this->hasMany(Image::class);
    // }

    // protected $casts = [
    //     'created_at' => 'datetime:d-M-Y',
    // ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function variations(){
        return $this->hasMany(Variation::class);
    }

    // public function reviews(){
    //     return $this->hasMany(Review::class);
    // }

    public function reviewCount(){
        return $this->hasOne(Reviewcount::class);
    }

    public function meta(){
        return $this->hasOne(ProductMeta::class, 'product_id');
    }
}

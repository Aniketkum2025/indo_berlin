<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model
{
    protected $connection = 'mysql_website';
    protected $guarded = [];

    protected $table = 'product_meta';

    public function product(){
        return $this->belongsTo(Product::class);
    }
}

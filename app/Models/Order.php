<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $connection = 'mysql_website';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];


    public function orderdetails()
    {
        return $this->hasMany(Orderdetail::class);
    }
}

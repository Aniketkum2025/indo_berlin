<?php 
// app/Models/Country.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopCity extends Model
{
    protected $connection = 'mysql_website';
    protected $table = "top_30_cities";
    protected $fillable = ['country_id', 'name', 'population'];
}

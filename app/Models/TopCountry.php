<?php 
// app/Models/Country.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopCountry extends Model
{
    protected $connection = 'mysql_website';
    protected $table = "top_30_countries";
    protected $fillable = ['name', 'iso2', 'iso3', 'population'];
}

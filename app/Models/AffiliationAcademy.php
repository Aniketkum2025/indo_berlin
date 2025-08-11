<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AffiliationAcademy extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'affiliation_academy';
    protected $fillable = ['academy_id' ,'affiliation_image'];
}

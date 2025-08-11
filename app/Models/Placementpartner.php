<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlacementPartner extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'placement_partner'; 

    protected $fillable = [
        'logo_url',
        'heading',
        'link'
    ];

}

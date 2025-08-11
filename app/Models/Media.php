<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'media';
    protected $fillable = [
        'heading',
        'description',
        'post_date',
        'post_link',
        'logo_url',
        'press',
        'star',
   ];
}

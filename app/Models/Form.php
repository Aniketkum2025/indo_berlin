<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
  protected $connection = 'mysql_website';
  protected $table = 'form';
    protected $fillable = [
        'form_title',
        'form_description',
        'google_form_link',
        'url',
       
    ];
}

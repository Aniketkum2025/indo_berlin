<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhatsappModal extends Model
{
    protected $connection = 'mysql_website';
    use SoftDeletes;

}

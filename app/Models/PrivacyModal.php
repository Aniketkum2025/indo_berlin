<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PrivacyModal extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'privacy_modals';
}

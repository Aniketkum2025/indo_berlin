<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Adminlog extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'adminlog';
    protected $fillable = [
         'user_id'
        ,'name',
         'email',
         'ip',
         'status',
         'role'

 ];
 }

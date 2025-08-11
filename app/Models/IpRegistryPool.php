<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IpRegistryPool extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'ip_registry_pool';
}

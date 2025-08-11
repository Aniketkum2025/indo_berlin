<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domain extends Model
{
    use SoftDeletes;

    protected $connection = 'mysql_website';
    static $snakeAttributes = false;

    public function domainAcademy(){
        return $this->hasMany(Academy::class, 'domain_id')->orderBy('total_enrollment', 'DESC');
    }
    
    public function popularDomainAcademy(){
        return $this->hasOne(Academy::class, 'domain_id')->orderBy('total_enrollment', 'DESC');
    }
}

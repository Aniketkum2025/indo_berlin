<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppcpgcourse extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'ppc_course1';
    //$table is create to stop adding 's' in last of table name by Eloquent model
    
    protected $fillable = [
         'slug' 
        ,'coursename' 
        ,'description' 
        ,'information'
        ,'brochure'
        ,'closingdate'
        ,'eligibilty'
        ,'footer_heading'
        ,'footer_text'
        
    ];
    
    public function ppc_review()
    {
        return $this->hasMany(Ppc_review::class);
    }

    public function ppc_modules()
    {
        return $this->hasMany(Ppc_modules::class);
    }

    public function ppc_achievment()
    {
        return $this->hasMany(Ppc_achievment::class);
    }

}

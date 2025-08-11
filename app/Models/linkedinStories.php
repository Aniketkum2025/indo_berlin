<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class linkedinStories extends Model
{
    protected $connection = 'mysql_website';
    protected $fillable = [
        'name','company_name','linkedin_url','image','company_logo'
    ];
    protected $table = 'linkedin_stories';   

    public function linkedin_stories_course(){
        return $this->belongsToMany(Course::class,'linkedin_stories_course');
    }
}

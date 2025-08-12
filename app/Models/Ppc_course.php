<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ppc_course extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'ppc_course';
    //$table is create to stop adding 's' in last of table name by Eloquent model
    
    protected $fillable = [
         'slug'
        ,'crm_course_id' 
        ,'logo'
        ,'academy_logo' 
        ,'helpline' 
        ,'main_text'
        ,'heading'
        ,'brochure'
        ,'sub_heading'
        ,'text'
        ,'module'
        ,'module_image'
        ,'achievment'
        ,'achievment_image'
        ,'review'
        ,'image'
        ,'footer_heading'
        ,'us'
        ,'academy_id'
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

    public function ppc_logo() {
		return $this->hasMany(Ppc_logo::class);
	}

    public function courses(){
        return $this->belongsToMany(Course::class, 'course_ppc_course', 'ppc_course_id', 'course_id')->orderBy('ppc_course_order', 'ASC');
    }
    public function ppc_certificates() {
		return $this->hasMany(Ppc_certificate::class);
	}

}

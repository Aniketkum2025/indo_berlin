<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Academy extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'academy';
    static $snakeAttributes = false; 
    protected $fillable = [
         'academy_title'
        ,'academy_image' 
        ,'academy_url'
        ,'order_by'
        ,'meta_title'
        ,'meta_description'
        ,'meta_keywords'
        ,'content'
        ,'see_more'
        ,'video_url'
        ,'image_url'
        ,'show_hide'
        ,'menu_background_color'
        ,'course_brochure'
        ,'background_image'
        ,'academy_logo'
    ];

    protected static function booted()
    {
        parent::booted();
        static::saved(function(){
            Cache::forget('academies');
        });
        static::deleted(function(){
            Cache::forget('academies');
        });
        static::updated(function(){
            Cache::forget('academies');
        });
    }

    public function coursename()
    {
        return $this->hasMany(Course::class)->where([
            ['show_hide',0],
            ['free_course',0]])->whereRaw("CASE WHEN academy_id = 20 THEN id IN (190,763,106,749,205,191) ELSE deleted_at IS NULL END")->orderBy('order_by', 'ASC');
    }

    public function boardadvisors(){
        return $this->hasMany(Boardadvisor::class);
    }

    public function relatedCourses(){
        return $this->belongsToMany(Course::class, 'academy_course')->where([
            ['show_hide',0],
            ['free_course',0]])
            ->whereNull('deleted_at')
            ->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');
    }
    public function affiliationImage()
    {
        return $this->hasMany(AffiliationAcademy::class);
    }
    public function certificateCourse(){
        return $this->belongsToMany(Course::class, 'academy_course')
            ->where([['show_hide',0],['free_course',0],['is_pg','!=',1],['is_university','!=',1]])
            ->whereNull('deleted_at')
            ->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');
    }
    public function pgCourse(){
        return $this->belongsToMany(Course::class, 'academy_course')->where([
            ['show_hide',0],
            ['is_pg', 1],
            ['free_course',0]])
            ->whereNull('deleted_at')
            ->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');
    }
    public function universityCourse(){
        return $this->belongsToMany(Course::class, 'academy_course')->where([
            ['show_hide',0],
            ['is_university', 1],
            ['free_course',0]])
            ->whereNull('deleted_at')
            ->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');
    }
    public function jobguaranteeCourse(){
        return $this->belongsToMany(Course::class, 'academy_course')->where([
            ['show_hide',0],
            ['is_job_guarantee', 1],
            ['free_course',0]])->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');
    }
    public function belongToDomain(){
        return $this->belongsTo(Domain::class, 'id', 'domain_id');
    }
    public function mastersCourse(){
        return $this->belongsToMany(Course::class, 'academy_course')->where([
            ['show_hide',0],
            ['free_course',0],
            ['course_name', 'LIKE', '%Master%']])
            ->whereNull('deleted_at')
            ->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');
    }
    public function pgpCourse(){
        return $this->belongsToMany(Course::class, 'academy_course')->where([
            ['show_hide',0],
            ['free_course',0],
            ['course_name', 'LIKE', '%Post Graduate Program%']])
            ->whereNull('deleted_at')
            ->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');
    }
    public function bachelorsCourse(){
        return $this->belongsToMany(Course::class, 'academy_course')->where([
            ['show_hide',0],
            ['free_course',0],
            ['course_name', 'LIKE', '%Bachelor%']])
            ->whereNull('deleted_at')
            ->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');
    }
    public function diplomaCourse(){
        return $this->belongsToMany(Course::class, 'academy_course')->where([
            ['show_hide',0],
            ['free_course',0],
            ['course_name', 'LIKE', '%Diploma%']])
            ->whereNull('deleted_at')
            ->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');
    }
    public function doctorateCourse(){
        // return $this->belongsToMany(Course::class, 'academy_course')->where([
        //     ['show_hide',0],
        //     ['free_course',0],
        //     ['course_name', 'LIKE', '%Doctorate%']])
        //     ->whereNull('deleted_at')
        //     ->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');

        return $this->belongsToMany(Course::class, 'academy_course')
        ->where([
            ['show_hide', 0],
            ['free_course', 0],
        ])
        ->where(function($query) {
            $query->where('course_name', 'LIKE', '%Doctorate %')
                  ->orWhere('course_name', 'LIKE', '%Doctor %')
                  ->orWhere('course_name', 'LIKE', '%Ph.D%');
        })
        ->whereNull('deleted_at')
        ->withoutGlobalScopes()
        ->orderBy('enrollment_count', 'DESC');
    }
    public function honoraryCourse(){
        return $this->belongsToMany(Course::class, 'academy_course')->where([
            ['show_hide',0],
            ['free_course',0],
            ['course_name', 'LIKE', '%Honorary Doctorate%']])
            ->whereNull('deleted_at')
            ->withoutGlobalScopes()->orderBy('enrollment_count', 'DESC');
    }
}

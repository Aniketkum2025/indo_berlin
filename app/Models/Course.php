<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Course extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'course';
 
    protected $guarded = [];

    protected static function booted()
    {
        static::addGlobalScope('courseRelatedToCountry', function (Builder $builder) {
            $builder->where('is_publish', '1')->where('country_id', session()->get('country') ? session()->get('country')->id : 102);
        });

        parent::booted();
        static::saved(function(){
            Cache::forget('courses');
        });
        static::deleted(function(){
            Cache::forget('courses');
        });
        static::updated(function(){
            Cache::forget('courses');
            Cache::forget('academies');
        });

    }
   
    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function metas(){
        return $this->hasMany(Meta::class);
    }

    public function faq()
    {
        return $this->hasMany(Faq::class);
    }

    public function companylogo()
    {
        return $this->hasMany(Companylogo::class);
    }
    
    public function aboutcourse()
    {
        return $this->hasMany(Aboutcourse::class);
    }

    public function academy()
    {
        return $this->belongsTo(Academy::class);
    }

    public function affiliation()
    {
        return $this->hasMany(Affiliation::class)->where('affiliation_type', '=', 0)->orderBy('order_by','asc');
    }

    public function batch()
    {
        return $this->hasMany(Batch::class)->orderBy('order_by', 'ASC');
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function keyfeatures()
    {
        return $this->hasMany(Keyfeatures::class);
    }

    public function module()
    {
        return $this->hasMany(Module::class)->orderBy('order_by', 'asc');
    }

    public function process()
    {
        return $this->hasMany(Process::class);
    }

    public function tool()
    {
        return $this->hasMany(Tool::class);
    }

    public function trainer()
    {
        return $this->hasMany(Trainer::class);
    }

    public function usp()
    {
        return $this->hasMany(Usp::class);
    }

    public function certificate()
    {
        return $this->hasMany(Certificate::class);
    }
    public function certificateCourse()
    {
        return $this->hasMany(Certificatecourse::class)->orderBy('order_by', 'asc');
    }

    public function logo()
    {
        return $this->hasMany(Companylogo::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonials::class);
    }

    public function seemore()
    {
        return $this->hasMany(See_more::class);
    }

    public function whoshouldlearn()
    {
        return $this->hasMany(WhoShouldLearn::class);
    }

    public function basicskill()
    {
        return $this->hasMany(Basicskill::class);
    }

     public function carrieropportunities()
    {
        return $this->hasMany(CarrierOpportunities::class);
    }

    public function skills()
    {
        return $this->hasMany(Skills::class);
    }
    public function jobprofiles()
    {
        return $this->hasMany(JobProfile::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class);
    }

    public function alumni_placed()
    {
        return $this->hasMany(Alumni_placed::class);
    }

    public function alumni_review()
    {
        return $this->hasMany(Alumni_review::class);
    }

    public function crmcourses(){
        return $this->belongsToMany(Crmcourse::class, 'crmcourse_course', 'course_id', 'crmcourse_id');
    }

    public function academies(){
        return $this->belongsToMany(Academy::class, 'academy_course');
    }

    public function ppccourses(){
        return $this->belongsToMany(Ppc_course::class, 'course_ppc_course', 'ppc_course_id', 'course_id');
    }
    
    public function course_modules()
    {
        return $this->hasMany(CourseModules::class)->where('is_deleted',0)->orderBy('show_order');
    }

    public function batch_crm()
    {
        return $this->hasOne(BatchFromCrm::class,'course','crm_course_id')->where('batchDate','>=',date('Y-m-d'));
    }

    public function placedLearners()
    {
        return $this->belongsToMany(Placedlearner::class, 'course_placed_learner', 'course_id', 'placed_learner_id');
    }
    public function duration()
    {
        return $this->hasOne(CourseDuration::class, 'crm_course_id', 'crm_course_id');
    }
    public function crmCoursePirce(){
        return $this->hasOne(CRMCourse1::class,'crm_course_id','crm_course_id');
    }
    public function crmCourseBatch(){
        return $this->hasOne(CRMBatch::class,'course','crm_course_id')->where('batchDate','>=',date('Y-m-d'));
    }
    public function courseBrochure(){
        return $this->hasOne(CourseBrochure::class, 'course_id', 'id');
    }
    public function affiliation_menu()
    {
        return $this->hasMany(Affiliation::class)->where('affiliation_type', '=', 0)->where('show_menu_bar', '=', '1')->orderBy('order_by','asc');
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function crmcourse_course()
    {
        return $this->hasMany(CrmcourseCourse::class);
    }

    public function videoReviews()
    {
        return $this->hasMany(Videoreviews::class);
    }
}

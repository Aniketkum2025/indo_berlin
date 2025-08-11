<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ip_ambassador_ambasdor_coursemaping extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'ip_ambassador_ambasdor_coursemaping';
    protected $fillable = [
         'id'
        ,'course_id' 
        ,'ambasdor_id'
        ,'academy_id'
        ,'course_name'
        ,'slug'     
       
    ];

    public function coursename()
    {
        return $this->hasMany(Course::class)->where([
            ['show_hide',0],
            ['free_course',0]])->orderBy('order_by', 'ASC');
    }

    public function boardadvisors(){
        return $this->hasMany(Boardadvisor::class);
    }

    public function relatedCourses(){
        return $this->belongsToMany(Course::class, 'academy_course')->where([
            ['show_hide',0],
            ['free_course',0]])->orderBy('order_by', 'ASC');
    }
}

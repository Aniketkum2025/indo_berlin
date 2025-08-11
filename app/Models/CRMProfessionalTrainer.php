<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class CRMProfessionalTrainer extends Model
{
    // use SoftDeletes;
    protected $connection = 'mysql2';

    protected $table = 'professional_trainer_profile';

    protected $guarded = [];

    // public function trainer()
    // {
    //     return $this->hasMany(CRMTrainerCourse::class, 'p_trainer_id', 'id');
    // }
    public function courses(){
        return $this->belongsToMany(CRMCourse1::class, 'trainer_course', 'p_trainer_id', 'course_id');
    }
}

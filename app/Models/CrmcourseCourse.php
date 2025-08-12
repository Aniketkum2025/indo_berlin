<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrmcourseCourse extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'crmcourse_course';

    public function professional_trainer(){
        return $this->hasManyThrough(CRMProfessionalTrainer::class, CRMTrainerCourse::class, 'course_id', 'id', 'crmcourse_id', 'p_trainer_id')->distinct();
    }
}

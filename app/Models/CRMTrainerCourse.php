<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
class CRMTrainerCourse extends Model
{
    // use SoftDeletes;
    protected $connection = 'mysql2';
    protected $table = 'trainer_course';
    protected $guarded = [];

    public function professional_trainer(){
        return $this->hasMany(CRMProfessionalTrainer::class,'id','p_trainer_id'); //ONE TO MANY = HASmaNY,  //MANY TO ONE == BELONGS TO

       
    }
}



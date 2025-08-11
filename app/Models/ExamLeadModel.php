<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamLeadModel extends Model
{

    protected $connection = 'mysql_website';
    protected $table = 'exam_lead';
    
    protected $guarded = [];

    public function questions()
    {
        return $this->hasMany(ExamLeadQuestionModel::class);
    }
}

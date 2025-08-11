<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ExamLeadModel;

class ExamLeadQuestionModel extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'exam_lead_questions';
    protected $fillable = [
        'question',
        'a',
        'b',
        'c',
        'd',
        'correct_option',
        'exam_lead_model_id'
    ];

    public function examLead()
    {
        return $this->belongsTo(ExamLeadModel::class);
    }
}

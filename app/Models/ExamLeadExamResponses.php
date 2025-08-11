<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamLeadExamResponses extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'exam_lead_exam_response';
    protected $fillable = [
        'email_id',
        'exam_id',
        'total_questions',
        'obtained_marks',
        'table',
    ];
}

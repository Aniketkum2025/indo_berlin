<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publishcourse extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'publishcourses';
    protected $fillable = [
        'course_id',
        'publish_by',
        'hight_resolution_image',
        'replace_bootcamp_masterclass',
        'catchy_image',
        'replace_moodle_lms',
        'curriculum_of_brochure',
        'sign_should_be_there',
        'certificates_updated',
        'affiliations',
        'batch_price',
        'key_feature_icons',
        'certificate_uploaded_2_days',
        'allignment_course_content',
        'thumbnail_videos',
        'certification_process',
        'faq_must_be_added',
        'faq_improve_content',
        'add_Infographic_image',
        'qualitative_comparison',
        'schema_Identify',
        'h1_h2_tag',
        'backlinks',
        'name_analyst',
        'changes_required',
        'brouchure_uploaded',
        'certificate_uploaded',
        'youtube_video_upload',
        'faq',
        'bootcamp',
   ];
}

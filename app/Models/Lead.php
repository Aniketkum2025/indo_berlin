<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'lead';

    protected $fillable = [
        'name',
        'email',
        'countryCode',
        'phone',
        'course',
        'campaign_name',
        'description2',
        'source',
        'lead_country',
        'location',
        'gclid_field',
        'dep_type',
        'profession',
        'refer_email',
        'ip_address',
        'company_name',
        'is_verified',
        'lead_source_page_url',
        'member_id',
        'followuptime',
        'msclkid_field'
    ];
}

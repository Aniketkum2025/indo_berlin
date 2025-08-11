<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrmOfferLetter extends Model
{
    protected $connection = 'mysql2';
    protected $table = "offer_letter_upload";
    protected $guarded = [];

    public function enrollment() {
        return $this->hasOne(CRMEnrollment::class, 'id', 'enrollment_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BatchFromCrm extends Model
{
    protected $connection = 'mysql_website';
    protected $guarded = [];
    protected $table = 'batch_from_crm';
    protected $fillable = [
   'bid',
   'batchName',
   'course',
   'classroom',
   'city',
   'batch_type',
   'batchDate',
   'batch_price',
   'few_seats_left',
   'registration_open_close',
   'batch_order',
   'batch_never_end',
   'batch_price_option',
   'batch_timing',
   'batchEndDate'

    ];
}
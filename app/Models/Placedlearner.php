<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Placedlearner extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'placed_learner';

    protected $fillable = [
		'image',
        'country_id',
	];
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_placed_learner','course_id', 'placed_learner_id');
    }

}

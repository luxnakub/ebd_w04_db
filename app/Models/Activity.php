<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $fillable = ['community_id', 'activity_name', 'activity_date'];

    public function community()
    {
        return $this->belongsTo(Community::class, 'community_id');
    }
}
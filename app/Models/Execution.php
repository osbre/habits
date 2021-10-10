<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Execution extends Model
{
    protected $guarded = [];

    protected $dates = ['executed_at'];

    public function habit()
    {
        return $this->belongsTo(Habit::class);
    }
}

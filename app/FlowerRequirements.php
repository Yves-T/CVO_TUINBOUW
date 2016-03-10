<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowerRequirements extends Model
{
    public $timestamps = false;

    public function arrangement()
    {
        return $this->belongsTo(FlowerArrangements::class, 'flower_arrangements_id');
    }
}

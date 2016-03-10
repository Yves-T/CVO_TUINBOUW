<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowerArrangements extends Model
{
    public $timestamps = false;

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }

    public function requirements()
    {
        return $this->hasMany(FlowerRequirements::class, "flower_arrangements_id");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantHistory extends Model
{
    public $timestamps = false;

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}

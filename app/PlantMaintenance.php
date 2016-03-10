<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantMaintenance extends Model
{
    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}

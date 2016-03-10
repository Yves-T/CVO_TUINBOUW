<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantInformation extends Model
{
    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}

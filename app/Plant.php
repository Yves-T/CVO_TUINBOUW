<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public function plantInformation()
    {
        return $this->hasOne(PlantInformation::class);
    }

    public function plantCategory()
    {
        return $this->hasOne(PlantCategory::class);
    }
}

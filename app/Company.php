<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    //

    public function industry() {
        return $this->belongsTo(Industry::class);
    }

    public function getNameAttribute($value) {
        return strtoupper($value);
    }

    public function getCinAttribute($value) {
        return strtoupper($value);
    }

}

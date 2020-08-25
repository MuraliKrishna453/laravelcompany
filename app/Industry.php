<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model {

    //

    public function getNameAttribute($value) {
        return ucwords($value);
    }

    public function setNameAttribute($value) {
        return $this->attributes['name'] = strtolower($value);
    }

}

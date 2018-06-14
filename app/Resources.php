<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model {

    public function products() {
        $this->belongsTo(Products::class);
    }

}

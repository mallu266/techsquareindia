<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Resources;

class Products extends Model {

    public function resources() {
        $this->hasMany(Resources::class);
    }

}

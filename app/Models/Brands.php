<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    function phones() {
        return $this->hasMany(Phones::class,"brand_id","id");
    }
}

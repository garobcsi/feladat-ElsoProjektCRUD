<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    protected $table = "phones";
    protected $primaryKey = "id";
    protected $fillable = ["brand_id","model","color","soc","memory_size"];
    public $incrementing = false;
    function brands() {
        return $this->hasOne(Brands::class,"id","brand_id");
    }
    protected $casts = [
        'model' => 'string',
        'color' => 'string',
        'soc' => 'string',
        'memory_size' => 'integer'
    ];
}

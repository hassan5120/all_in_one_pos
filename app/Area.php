<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'area_pk';
    public $timestamps = false;

    public function city()
    {
        return $this->hasOne(\App\CityArea::class, 'city_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityArea extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'cities_pk';


    public function areas()
    {
        return $this->belongsTo(\App\Area::class, 'city_id');
    }

}

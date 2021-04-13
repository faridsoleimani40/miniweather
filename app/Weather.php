<?php

namespace App;
use Carbon;
use Illuminate\Database\Eloquent\Model;


class Weather extends Model
{

     protected $fillable =['city_name', 'description','lon','lat', 'wind_speed','humidity',
    'pressure','temp','temp_max','temp_min','status'];



}

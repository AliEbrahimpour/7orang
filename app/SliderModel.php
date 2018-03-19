<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table='slider';
    public $timestamps=false;
    protected $fillable = ['address','content','text'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalonModel extends Model
{
    protected $table='salon';
    public $timestamps=false;
    protected $fillable = ['name','map','img','location'];

}

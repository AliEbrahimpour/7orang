<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpechModel extends Model
{
    protected $table='speech';
    public $timestamps=false;
    protected $fillable = ['name','img','s_description'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoidadModel extends Model
{
    protected $table='roidad';
    public $timestamps=false;
    /*title	date	description	poster	salon_id	tarikh	spech_id*/
    protected $fillable = ['title','date','description','poster','spech_id','salon_id','time'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JayegahModel extends Model
{
    protected $table='jayegah';
    public $timestamps=false;
    protected $fillable = ['name','capecity','price','number','count_radif','count_sandali','salon_id','area',];
}

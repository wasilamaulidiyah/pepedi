<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanam extends Model
{
    protected $table = 'tanam';
    protected $guarded = [];

    public function padi()
    {
    	return $this->belongsTo('App\Padi');
    }
    public function penjadwalan()
    {
    	return $this->hasMany('App\Penjadwalan','tanam_id');
    }
}

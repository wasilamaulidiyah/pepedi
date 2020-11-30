<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pratanam extends Model
{
    protected $table = 'pratanam';
    protected $guarded = [];

    public function padi()
    {
    	return $this->belongsTo('App\Padi');
    }
    public function penjadwalan()
    {
    	return $this->hasMany('App\Penjadwalan','pratanam_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PascaTanam extends Model
{
    protected $table = 'pascatanam';
    protected $guarded = [];

    public function padi()
    {
    	return $this->belongsTo('App\Padi', 'padi_id');
    }
    public function penjadwalan()
    {
    	return $this->hasMany('App\Penjadwalan', 'pascatanam_id');
    }	
}

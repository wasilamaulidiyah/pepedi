<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padi extends Model
{
    protected $table = 'padi';
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function pratanam()
    {
    	return $this->hasMany('App\Pratanam', 'padi_id');
    }
    public function pascatanam()
    {
    	return $this->hasMany('App\PascaTanam', 'padi_id');
    }
    public function tanam()
    {
    	return $this->hasMany('App\Tanam', 'padi_id');
    }
}

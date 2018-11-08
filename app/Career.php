<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
   protected $table= 'careers';
    protected $fillable= ['idc', 'name','active','ida'];

      public function areas()
  {
  	return $this->belongsTo('App\Area', 'ida');
  }
}

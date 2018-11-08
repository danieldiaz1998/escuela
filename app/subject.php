<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
       protected $table= 'subjects';
    protected $fillable= ['ids', 'subject','active','academy','idc','ida'];
  
  public function careers()
  {
  	return $this->belongsTo('App\Career', 'idc');
  }
}


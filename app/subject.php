<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subject extends Model
{
	use SoftDeletes;
    protected $table= 'subjects';
    protected $primaryKey='ids';
    protected $fillable= ['ids', 'subject','active','academy','idc','ida'];
    protected $hidden = ['remember_token'];
    protected $date = ['deleted_at'];
  public function careers()
  {
  	return $this->belongsTo('App\Career', 'idc');
  }
}


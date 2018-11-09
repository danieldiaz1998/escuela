<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
	use SoftDeletes;
   protected $table= 'careers';
    protected $primaryKey='idc';
    protected $fillable= ['idc', 'name','active','ida'];
         protected $hidden = ['remember_token'];
    protected $date = ['deleted_at'];

}

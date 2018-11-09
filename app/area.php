<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class area extends Model
{
	use SoftDeletes;
    protected $table= 'areas';
    protected $primaryKey='ida';
    protected $fillable= ['ida','area'];
    protected $hidden = ['remember_token'];
    protected $date = ['deleted_at'];
}

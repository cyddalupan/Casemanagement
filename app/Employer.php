<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employer extends Model {
	
    use SoftDeletes;
    protected $dates = ['deleted_at'];

}

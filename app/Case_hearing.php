<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Case_hearing extends Model {

    use SoftDeletes;
    protected $fillable = array('case_file_id');
    protected $dates = ['deleted_at'];
}

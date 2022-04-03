<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Case_file extends Model {
	
    use SoftDeletes;
    protected $table = 'case_files';
    protected $dates = ['deleted_at'];

	public function casestatus()
    {
		return $this->belongsTo('App\Casestatus');
	}

	public function employer()
    {
		return $this->belongsTo('App\Employer');
	}

	public function agent()
    {
		return $this->belongsTo('App\Agent');
	}

	public function agency()
    {
		return $this->belongsTo('App\Agency');
	}

	public function case_hearing()
    {
		return $this->hasMany('App\Case_hearing');
	}
}

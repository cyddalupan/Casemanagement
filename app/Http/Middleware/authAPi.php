<?php namespace App\Http\Middleware;

use Closure;

class authAPi {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$data = json_decode($request->data);
		
		//hash code is
		if($data->auth == md5(date('YmdH')."cydApi"))
			return $next($request);
		else
			die('Incorrect Api');
	}

}

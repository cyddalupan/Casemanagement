<?php namespace App\Http\Middleware;

use Closure;
use App\Events\SendSmsEvent;

class loginAuth {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next){
		if(null !== session('account_id'))
			return $next($request);
		else
			return redirect('error')->with('message', 'You Are Not Allowed to View This System');
	}

}

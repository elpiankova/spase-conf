<?php
	/**
	 * Created by PhpStorm.
	 * User: mammut
	 * Date: 21.02.16
	 * Time: 19:12
	 */
	namespace App\Http\Middleware;

	use App\Index;
	use Closure;
	use Illuminate\Support\Facades\Redirect;

	class ConfCloseMiddleware
	{
		/**
		 * @param          $request
		 * @param \Closure $next
		 *
		 * @return \Redirect
		 */
		public function handle($request, Closure $next)
		{
			$indexs = Index::first();
			$conf_control = $indexs['conf-control'];
			if ($conf_control == false) {
				return redirect()->guest('home');
			}
			return $next($request);
		}
	}
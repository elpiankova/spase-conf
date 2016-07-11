<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 21.02.16
 * Time: 19:12
 */
namespace App\Http\Middleware;

use Closure;
use League\Flysystem\Config;
use Redirect;
use Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class AdminPanel
{
    /**
     * @param          $request
     * @param \Closure $next
     *
     * @return \Redirect
     */
    public function handle($request, Closure $next)
    {
        if ($user = Sentinel::getUser())
        {
            if ($user->inRole('admin'))
            {
                Config::set('app.debug', true);
                return $next($request);
            } else
                return Redirect::back();
        }
            return Redirect::back();

    }
}
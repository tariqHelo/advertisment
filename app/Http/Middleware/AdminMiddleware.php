<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\DB;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $admins = Role::where('name' , 'admin')->get('user_id')->toArray();

//        dd($admins);
        if (! in_array(auth()->id() , $admins[0])){
            auth()->logout();
            return redirect(route('login'));
        }
        else{
            return $next($request);
        }

    }
}

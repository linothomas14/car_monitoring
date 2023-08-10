<?php

namespace App\Http\Middleware;

// use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Closure;

class Role{


    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();
    
        foreach($roles as $role) {
            // Check if user has the role This check will depend on how your roles are set up
            if($user->role == $role)
                return $next($request);
        }
        abort(403, 'Anda tidak memiliki hak mengakses laman tersebut!');
    }
}
?>
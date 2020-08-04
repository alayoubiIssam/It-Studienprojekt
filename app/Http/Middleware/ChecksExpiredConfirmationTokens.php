<?php

namespace App\Http\Middleware;

use Closure;

class ChecksExpiredConfirmationTokens
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $redirect
     * @return mixed
     */
    public function handle($request, Closure $next, $redirect)
    {
        if($request->confirmation_token->hasExpirde()){
            return redirect($redirect)->WithError('token expirde.');
        }
        return $next($request);
    }
}

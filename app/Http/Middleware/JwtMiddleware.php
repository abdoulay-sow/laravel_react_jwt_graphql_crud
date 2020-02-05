<?php

namespace App\Http\Middleware;

use Closure;
//use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
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
        
        try {
            $user = \JWTAuth::parseToken()->authenticate();
        } catch(\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired' => 'Token expiré'], 401 );
        
        }catch(\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid' => 'Token Invalid'], 401 );
        }
        catch(\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_expired' => 'Token Expiré'], 401 );
        }
        return $next($request);
    }
}

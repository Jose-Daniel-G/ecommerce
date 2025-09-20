<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JwtMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}


// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
// use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
// use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
// use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;

// class JwtMiddleware
// {
//     public function handle(Request $request, Closure $next)
//     {
//         try {
//             $user = JWTAuth::parseToken()->authenticate();
            
//             if (!$user) {
//                 return response()->json([
//                     'success' => false,
//                     'message' => 'User not found'
//                 ], 404);
//             }
            
//         } catch (TokenExpiredException $e) {
//             return response()->json([
//                 'success' => false,
//                 'message' => 'Token has expired'
//             ], 401);
//         } catch (TokenInvalidException $e) {
//             return response()->json([
//                 'success' => false,
//                 'message' => 'Token is invalid'
//             ], 401);
//         } catch (JWTException $e) {
//             return response()->json([
//                 'success' => false,
//                 'message' => 'Token is required'
//             ], 401);
//         }

//         return $next($request);
//     }
// }
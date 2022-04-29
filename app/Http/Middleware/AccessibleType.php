<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

trait AccessibleType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect($this->redirect_page);
        }

        $user = auth()->user();

        /** @var App\Models\User $user */
        $access_types = $user->access_types()->get();

        $redirect = true;
        
        foreach ($access_types as $access_type) {
            if ($access_type->name === $this->access_type or $access_type->name === 'master') {
                $redirect = false;
            }
        }

        if ($redirect) {
            return redirect($this->redirect_page);
        }
        
        return $next($request);
    }
}
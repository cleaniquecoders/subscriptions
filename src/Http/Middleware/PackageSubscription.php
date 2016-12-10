<?php

namespace CleaniqueCoders\Subscriptions\Http\Middleware;

use Auth;
use Carbon\Carbon;
use CleaniqueCoders\Subscriptions\PackageUser;
use Closure;

class PackageSubscription
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
        $exist = PackageUser::where('status', 1)
            ->where('user_id', Auth::user()->id)->first();

        if (empty($exist)) {
            return redirect()->route('subscriptions.unsubscribed');
        }

        $timezone = !empty(config('app.timezone')) ? config('app.timezone') : 'Asia/Kuala_Lumpur';
        $today = Carbon::now($timezone);

        if ($today->diffInSeconds($exist->expired_at, false) < 0) {
            return redirect()->route('subscriptions.expired');
        }

        return $next($request);
    }
}

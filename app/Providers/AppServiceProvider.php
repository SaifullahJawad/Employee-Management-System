<?php

namespace App\Providers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        Gate::define('owner', function (User $user) {
            return $user->user_type === 'owner';
        });



        Gate::define('checked_in', function (User $user) {

            $check_ins = $user->reports->pluck('check_in');

            return $check_ins->map( fn ($item, $key) => $item !== null ? Carbon::parse($item)->format('Y-m-d') : null )
                ->search(Carbon::now()->toDateString()) !== false;

            
        });

        Gate::define('checked_out', function (User $user) {

            $check_outs = $user->reports->pluck('check_out');

            return $check_outs->map( fn ($item, $key) => $item !== null ? Carbon::parse($item)->format('Y-m-d') : null )
                ->search(Carbon::now()->toDateString()) !== false;
            
        });

    }
}

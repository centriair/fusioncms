<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class FusionServiceProvider extends ServiceProvider
{
    protected $models = [
        \Fusion\Models\User::class => \App\Models\User::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $morphTypes = [];
        foreach ($this->models as $from => $to) {
            if (class_exists($from) && class_exists($to)) {
                $this->app->bind($from, $to);
                if (method_exists($to, 'morphTypeName')) { 
                    $morphTypes[app($to)->morphTypeName()] = $to;
                }
            }
        }

        Relation::morphMap($morphTypes);
    }
}

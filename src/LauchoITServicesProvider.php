<?php

namespace LauchoIT\LaravelService;

use Illuminate\Support\ServiceProvider;

class LauchoITServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(MakeService::class);
    }
}

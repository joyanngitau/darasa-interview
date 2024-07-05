<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Mechanisms\ComponentRegistry;
use App\Http\Livewire\QueryHandler; // Adjust the namespace as per your component

class LivewireServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ComponentRegistry::class, function () {
            $componentRegistry = new ComponentRegistry();

            // Register your Livewire components here
            $componentRegistry->component('query-handler', QueryHandler::class);

            return $componentRegistry;
        });
    }
}

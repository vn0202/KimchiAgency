<?php

namespace App\Providers;

use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentAsset::register([
            Js::make('tinymce', 'https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js'),
            Js::make('tiny', asset('js/filament/init_tinymce.js')),
        ]);
    }
}

<?php

namespace App\Providers;

use BezhanSalleh\FilamentLanguageSwitch\Enums\Placement;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['en','ru'])
                ->flags([
                    'en' => asset('file/image/flags/en/en_flag.svg'),
                    'ru' => asset('file/image/flags/ru/ru_flag.svg'),
                ])
                ->displayLocale('ru')
                ->outsidePanelPlacement(Placement::TopCenter)
                ->visible(outsidePanels: true);
        });
    }
}

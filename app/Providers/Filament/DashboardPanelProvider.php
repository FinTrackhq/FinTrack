<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Tenancy\EditCompanyProfile;
use App\Filament\Pages\Tenancy\RegisterCompany;
use App\Models\Company;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Hasnayeen\Themes\Http\Middleware\SetTheme;
use Hasnayeen\Themes\ThemesPlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use LaraZeus\Boredom\BoringAvatarPlugin;
use LaraZeus\Boredom\BoringAvatarsProvider;
use LaraZeus\Boredom\Enums\Variants;
use lockscreen\FilamentLockscreen\Http\Middleware\Locker;
use lockscreen\FilamentLockscreen\Lockscreen;
use Njxqlus\FilamentProgressbar\FilamentProgressbarPlugin;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use ShuvroRoy\FilamentSpatieLaravelHealth\FilamentSpatieLaravelHealthPlugin;
use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults;
use Swis\Filament\Backgrounds\FilamentBackgroundsPlugin;
class DashboardPanelProvider extends PanelProvider
{
    /**
     * @throws \Exception
     */
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->login()
            ->passwordReset()
            ->id('dashboard')
            ->path('dashboard')
            ->profile()
            ->plugins([
               BoringAvatarPlugin::make()
                    ->variant(Variants::MARBLE)
                    ->size(60)
                    ->square()
                    ->colors(['0A0310','49007E','FF005B','FF7D10','FFB238']),
                FilamentBackgroundsPlugin::make()
                    ->showAttribution(false)
                    ->remember(200),
                ThemesPlugin::make(),
                new Lockscreen(),
                FilamentSpatieLaravelHealthPlugin::make()
                    ->usingPage(HealthCheckResults::class),
                FilamentProgressbarPlugin::make()
                    ->color('#166534'),
            ])
            ->registration()
            ->brandLogo(asset('/file/image/logo/svg/logo.svg'))
            ->brandLogoHeight('3rem')
            ->favicon(asset('file/image/logo/svg/logo.svg'))
            ->colors([
                'primary' => Color::hex('#166534'),
            ])
            ->defaultAvatarProvider(
             BoringAvatarsProvider::class
            )
            ->font('Roboto')
            ->tenant(Company::class,slugAttribute: 'short_name', ownershipRelationship: 'company')
            ->tenantRegistration(RegisterCompany::class)
            ->tenantProfile(EditCompanyProfile::class)
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->tenantMiddleware([
                SetTheme::class

            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
                Locker::class,
            ]);
    }
}

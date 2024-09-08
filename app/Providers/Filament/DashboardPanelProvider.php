<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\Login;
use App\Filament\Pages\Auth\Register;
use App\Filament\Pages\Tenancy\EditCompanyProfile;
use App\Filament\Pages\Tenancy\RegisterCompany;
use App\Models\Company;
use Exception;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Hasnayeen\Themes\Http\Middleware\SetTheme;
use Hasnayeen\Themes\ThemesPlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Jeffgreco13\FilamentBreezy\BreezyCore;
use lockscreen\FilamentLockscreen\Http\Middleware\Locker;
use lockscreen\FilamentLockscreen\Lockscreen;
use Swis\Filament\Backgrounds\FilamentBackgroundsPlugin;

class DashboardPanelProvider extends PanelProvider
{
    /**
     * @throws Exception
     */
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->spa()
            ->default()
            ->login(Login::class)
            ->registration(Register::class)
            ->passwordReset()
            ->id('dashboard')
            ->path('dashboard')
            ->emailVerification()
            ->colors([
                'primary' => Color::hex('#166534'),
            ])
            ->profile()
            ->plugins([
                BreezyCore::make()
                    ->myProfile(
                        hasAvatars: true,
                        slug: 'my-profile',
                        navigationGroup: 'Settings'
                    )
                    ->enableSanctumTokens()
                    ->enableTwoFactorAuthentication(),
                FilamentBackgroundsPlugin::make()
                    ->showAttribution(false)
                    ->remember(200),
                ThemesPlugin::make(),
                new Lockscreen(),
            ])
            ->brandLogo(asset('/file/image/logo/svg/logo.svg'))
            ->brandLogoHeight('3rem')
            ->favicon(asset('file/image/logo/svg/logo.svg'))
            ->font('Roboto')
            ->tenant(Company::class, ownershipRelationship: 'company')
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

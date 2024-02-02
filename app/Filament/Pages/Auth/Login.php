<?php

namespace App\Filament\Pages\Auth;

use Afatmustafa\FilamentTurnstile\Forms\Components\Turnstile;
use Filament\Forms\Form;
use Filament\Pages\Auth\Login as AuthLogin;

class Login extends AuthLogin
{
    /**
     * @return array<int|string, string|Form>
     */
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                        Turnstile::make('captcha')
                            ->theme('auto') // accepts light, dark, auto
                            ->language('ru')
                            ->size('big'),
                    ])
                    ->statePath('data'),
            ),
        ];
    }
}

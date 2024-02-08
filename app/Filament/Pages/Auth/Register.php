<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Register as BaseRegister;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Actions\Action;

class Register extends  BaseRegister
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                        $this->getBackToDashboardComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];


    }
    protected function getBackToDashboardComponent() : Component
    {
        return Action::make('edit')
            ->button()
            ->url('http://localhost:8000/dashboard');
    }
}

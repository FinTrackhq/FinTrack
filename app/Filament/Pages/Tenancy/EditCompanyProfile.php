<?php
namespace App\Filament\Pages\Tenancy;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;
use Illuminate\Database\Eloquent\Model;

class EditCompanyProfile extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Edit company';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('type')
                    ->options([
                        'General' => 'General ',
                        'Simplified' => 'Simplified',
                        'Patent' => 'Patent'
                    ]),
                TextInput::make('name'),
                TextInput::make('short_name'),
            ]);

    }
}

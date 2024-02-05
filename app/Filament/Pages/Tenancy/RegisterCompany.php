<?php
namespace App\Filament\Pages\Tenancy;

use App\Models\Company;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;
use Illuminate\Database\Eloquent\Model;

class RegisterCompany extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Create company';
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                ->placeholder('FinTrack LTD.')
                ->minLength(2)
                ->maxLength(20)
                ->prefixIcon('heroicon-o-home')
                ->unique(),
                TextInput::make('short_name')
                    ->required()
                    ->prefixIcon('heroicon-o-home')
                    ->placeholder('FT LTD.')
                    ->minLength(2)
                    ->maxLength(10)
                    ->unique(),
                Select::make('type')
                    ->required()
                    ->options([
                        'General' => 'General',
                        'Simplified' => 'Simplified',
                        'Patent' => 'Patent'
                    ])
            ]);
    }

    protected function handleRegistration(array $data): Company
    {
        $data['user_id'] = auth()->user()->id;
        $company = Company::create($data);

        $company->users()->attach(auth()->user());

        return $company;
    }
}

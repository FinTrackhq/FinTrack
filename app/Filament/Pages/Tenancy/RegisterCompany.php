<?php
namespace App\Filament\Pages\Tenancy;

use App\Models\Company;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterCompany extends RegisterTenant
{
    public static function getLabel(): string
    {
        return __('company.createCompany');
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Actions::make([
                    Action::make(__('company.backToDashboard'))
                        ->icon('heroicon-m-chevron-left')
                        ->action(fn() => redirect('dashboard')),
                ]),
                TextInput::make('name')
                    ->label(__('columns.name'))
                    ->required()
                ->placeholder('FinTrack LTD.')
                ->minLength(2)
                ->maxLength(20)
                ->prefixIcon('heroicon-o-home')
                ->unique(),
                TextInput::make('short_name')
                    ->label(__('columns.shortName'))
                    ->required()
                    ->prefixIcon('heroicon-o-home')
                    ->placeholder('FT LTD.')
                    ->minLength(2)
                    ->maxLength(10)
                    ->unique(),
                Select::make('type')
                    ->label(__('columns.type'))
                    ->required()
                    ->options([
                        'General' => __('columns.typeGeneral'),
                        'Simplified' => __('columns.typeSimplified'),
                        'Patent' => __('columns.typePatent')
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

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyContactResource\Pages;
use App\Models\CompanyContact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CompanyContactResource extends Resource
{
    protected static ?string $model = CompanyContact::class;
    protected static ?string $slug = 'Contact';

    protected static ?string $navigationGroup = 'Company management';
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('address')
                    ->label(__('columns.address'))
                    ->required()
                    ->suffixIcon('heroicon-m-globe-alt')
                    ->placeholder('Russia, Voronezh region, c. Voronezh, prospekt Revolyutsii, house 20')
                    ->minLength(2)
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label(__('columns.email'))
                    ->required()
                    ->email()
                    ->placeholder('example@fintrack.space')
                    ->suffixIcon('heroicon-o-envelope')
                    ->minLength(5)
                    ->maxLength(255),
                Forms\Components\TextInput::make('number')
                    ->label(__('columns.phoneNumber'))
                    ->suffixIcon('heroicon-m-device-phone-mobile')
                    ->required()
                    ->placeholder('0123456789')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('address')
                    ->label(__('columns.address'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label(__('columns.email'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('number')
                    ->label(__('columns.phoneNumber'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('columns.createAt'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('columns.updateAt'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label(__('columns.deleteAt'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanyContacts::route('/'),
            'create' => Pages\CreateCompanyContact::route('/create'),
            'view' => Pages\ViewCompanyContact::route('/{record}'),
            'edit' => Pages\EditCompanyContact::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel() : string
    {
        return __('contact.contact');
    }
    public static function getPluralModelLabel() : string
    {
        return __('contact.contacts');
    }
}

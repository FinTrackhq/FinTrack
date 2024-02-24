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
    protected static ?string $modelLabel = 'Contact';
    protected static ?string $navigationLabel = 'Contact';
    protected static ?string $slug = 'Contact';
    protected static ?string $navigationGroup = 'Company management';
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('address')
                    ->required()
                    ->suffixIcon('heroicon-m-globe-alt')
                    ->placeholder('Russia, Voronezh region, c. Voronezh, prospekt Revolyutsii, house 20')
                    ->minLength(2)
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->placeholder('example@fintrack.space')
                    ->suffixIcon('heroicon-o-envelope')
                    ->minLength(5)
                    ->maxLength(255),
                Forms\Components\TextInput::make('number')
                    ->suffixIcon('heroicon-m-device-phone-mobile')
                    ->required()
                    ->placeholder('0123456789')
                    ->minLength(10)
                    ->maxLength(10)
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
}

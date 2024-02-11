<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyStuffResource\Pages;
use App\Models\CompanyStuff;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyStuffResource extends Resource
{
    protected static ?string $model = CompanyStuff::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Stuff management';
    protected static ?string $modelLabel = 'Stuff';
    protected static ?string $navigationLabel = 'Stuff';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name')
                    ->prefixIcon('heroicon-o-user')
                    ->placeholder('Ivanov Ivan Ivanovich')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('birthday')
                    ->prefixIcon('heroicon-o-calendar-days')
                    ->date()
                    ->placeholder('07.07.2000')
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->suffixIcon('heroicon-m-device-phone-mobile')
                    ->required()
                    ->unique()
                    ->placeholder('0123456789')
                    ->minLength(10)
                    ->maxLength(10)
                    ->numeric(),
                Forms\Components\TextInput::make('email')
                    ->placeholder('example@example.example')
                    ->unique()
                    ->prefixIcon('heroicon-o-envelope')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('post')
                    ->required()
                    ->prefixIcon('heroicon-o-user-circle')
                    ->placeholder('director')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthday')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('post')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListCompanyStuffs::route('/'),
            'create' => Pages\CreateCompanyStuff::route('/create'),
            'view' => Pages\ViewCompanyStuff::route('/{record}'),
            'edit' => Pages\EditCompanyStuff::route('/{record}/edit'),
        ];
    }
}

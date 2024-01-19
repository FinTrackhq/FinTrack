<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyRequisiteResource\Pages;
use App\Filament\Resources\CompanyRequisiteResource\RelationManagers;
use App\Models\CompanyRequisite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CompanyRequisiteResource extends Resource
{
    protected static ?string $model = CompanyRequisite::class;
    protected static ?string $navigationGroup = 'Company management';
    protected static ?string $navigationLabel = 'Requisite';
    protected static ?string $modelLabel = 'Requisite';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('company_id')
                    ->reactive()
                    ->options(\App\Models\Company::where('id', session()->get('name'))->pluck('name', 'id'))
                    ->default(session()->get('company_id'))
                    ->disabled(),
                Forms\Components\TextInput::make('inn')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kpp')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('ogrn')
                    ->required()
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
                Tables\Columns\TextColumn::make('inn')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kpp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ogrn')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListCompanyRequisites::route('/'),
            'create' => Pages\CreateCompanyRequisite::route('/create'),
            'view' => Pages\ViewCompanyRequisite::route('/{record}'),
            'edit' => Pages\EditCompanyRequisite::route('/{record}/edit'),
        ];
    }
}
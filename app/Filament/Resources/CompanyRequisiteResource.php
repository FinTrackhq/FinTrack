<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyRequisiteResource\Pages;
use App\Models\CompanyRequisite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CompanyRequisiteResource extends Resource
{
    protected static ?string $model = CompanyRequisite::class;
    protected static ?string $navigationGroup = 'Company management';

    protected static ?string $slug = 'Requisite';

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
                Forms\Components\TextInput::make('inn')
                    ->label(__('columns.inn'))
                    ->required()
                    ->minLength(12)
                    ->maxLength(12)
                    ->placeholder('012345678999')
                    ->prefixIcon('heroicon-o-document-text')
                    ->numeric(),
                Forms\Components\TextInput::make('kpp')
                    ->label(__('columns.kpp'))
                    ->required()
                    ->minLength(9)
                    ->maxLength(9)
                    ->placeholder('012345678')
                    ->prefixIcon('heroicon-o-document-text')
                    ->numeric(),
                Forms\Components\TextInput::make('ogrn')
                    ->label(__('columns.ogrn'))
                    ->required()
                    ->minLength(12)
                    ->maxLength(12)
                    ->placeholder('012345678999')
                    ->prefixIcon('heroicon-o-document-text')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('inn')
                    ->label(__('columns.inn'))
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kpp')
                    ->label(__('columns.kpp'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ogrn')
                    ->label(__('columns.ogrn'))
                    ->searchable()
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
            'index' => Pages\ListCompanyRequisites::route('/'),
            'create' => Pages\CreateCompanyRequisite::route('/create'),
            'view' => Pages\ViewCompanyRequisite::route('/{record}'),
            'edit' => Pages\EditCompanyRequisite::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel() : string
    {
        return __('requisite.requisite');
    }
    public static function getPluralModelLabel() : string
    {
        return __('requisite.requisites');
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyWarehouseResource\Pages;
use App\Models\CompanyWarehouse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyWarehouseResource extends Resource
{
    protected static ?string $model = CompanyWarehouse::class;

    protected static ?string $navigationGroup = 'Warehouse management';

    protected  static  ?string $slug ="Warehouse";
    protected static ?string $navigationIcon = 'heroicon-o-wallet';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('columns.name'))
                    ->required()
                    ->minLength(2)
                    ->maxLength(255)
                    ->placeholder('Main warehouse')
                    ->prefixIcon('heroicon-o-wallet')
                    ->reactive()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('columns.name'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
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
            'index' => Pages\ListCompanyWarehouses::route('/'),
            'create' => Pages\CreateCompanyWarehouse::route('/create'),
            'view' => Pages\ViewCompanyWarehouse::route('/{record}'),
            'edit' => Pages\EditCompanyWarehouse::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel() : string
    {
        return __('warehouse.warehouse');
    }
    public static function getPluralModelLabel() : string
    {
        return __('warehouse.warehouses');
    }
}

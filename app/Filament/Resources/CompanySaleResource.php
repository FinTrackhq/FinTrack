<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanySaleResource\Pages;
use App\Models\CompanySale;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanySaleResource extends Resource
{
    protected static ?string $model = CompanySale::class;
    protected static ?string $navigationLabel = 'Sale';
    protected static ?string $modelLabel = 'Sale';
    protected  static ?string $slug ='Sale';
    protected static ?string $navigationGroup = 'Warehouse management';
    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('warehouse_id')
                    ->relationship('warehouse', 'name',modifyQueryUsing: fn (Builder $query) => $query->whereBelongsTo(Filament::getTenant()))
                    ->prefixIcon('heroicon-o-wallet')
                    ->required(),
                Select::make('plan_account_id')
                    ->relationship('planAccount','name')
                    ->prefixIcon('heroicon-o-document')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->placeholder('Software purchase')
                    ->minLength(1)
                    ->prefixIcon('heroicon-o-user')
                    ->maxLength(255),
                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->placeholder('10')
                    ->prefixIcon('heroicon-o-rectangle-stack')
                    ->minLength(1)
                    ->maxLength(100)
                    ->numeric(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->placeholder('100')
                    ->minLength(1)
                    ->maxLength(100)
                    ->prefix('$'),
                Forms\Components\TextInput::make('summary')
                    ->required()
                    ->placeholder('1000')
                    ->minLength(1)
                    ->maxLength(100)
                    ->prefix('$')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('warehouse_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('plan_account_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('company.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('summary')
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
            'index' => Pages\ListCompanySales::route('/'),
            'create' => Pages\CreateCompanySale::route('/create'),
            'view' => Pages\ViewCompanySale::route('/{record}'),
            'edit' => Pages\EditCompanySale::route('/{record}/edit'),
        ];
    }
}

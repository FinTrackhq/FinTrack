<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StuffStatementResource\Pages;
use App\Filament\Resources\StuffStatementResource\RelationManagers;
use App\Models\StuffStatement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StuffStatementResource extends Resource
{
    protected static ?string $model = StuffStatement::class;

    protected static ?string $navigationGroup = 'Stuff management';
    protected static ?string $navigationLabel = 'Statement';
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('stuff_id')
                    ->relationship('stuff', 'id')
                    ->required(),
                Forms\Components\Select::make('company_id')
                    ->relationship('company', 'name')
                    ->required(),
                Forms\Components\TextInput::make('salary_10')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('salary_25')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('salary')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('stuff.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('company.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('salary_10')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('salary_25')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('salary')
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
            'index' => Pages\ListStuffStatements::route('/'),
            'create' => Pages\CreateStuffStatement::route('/create'),
            'view' => Pages\ViewStuffStatement::route('/{record}'),
            'edit' => Pages\EditStuffStatement::route('/{record}/edit'),
        ];
    }
}

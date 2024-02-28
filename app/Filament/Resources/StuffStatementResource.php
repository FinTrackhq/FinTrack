<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StuffStatementResource\Pages;
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

    protected static ?string $slug = 'StuffStatement';
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('stuff_id')
                    ->label(__('columns.stuff'))
                    ->relationship('stuff', 'id')
                    ->prefixIcon('heroicon-o-user')
                    ->required(),
                Forms\Components\TextInput::make('salary_10')
                    ->label(__('columns.salary10'))
                    ->required()
                    ->prefix('$')
                    ->placeholder('500')
                    ->numeric(),
                Forms\Components\TextInput::make('salary_25')
                    ->label(__('columns.salary25'))
                    ->required()
                    ->prefix('$')
                    ->placeholder('500')
                    ->numeric(),
                Forms\Components\TextInput::make('salary')
                    ->label(__('columns.salary'))
                    ->required()
                    ->prefix('$')
                    ->placeholder('1000')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('stuff.id')
                    ->label(__('columns.stuff'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('salary_10')
                    ->label(__('columns.salary10'))
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('salary_25')
                    ->label(__('columns.salary25'))
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('salary')
                    ->label(__('columns.salary'))
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
            'index' => Pages\ListStuffStatements::route('/'),
            'create' => Pages\CreateStuffStatement::route('/create'),
            'view' => Pages\ViewStuffStatement::route('/{record}'),
            'edit' => Pages\EditStuffStatement::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel() : string
    {
        return __('stuffStatement.stuffStatement');
    }
    public static function getPluralModelLabel() : string
    {
        return __('stuffStatement.stuffStatements');
    }
}

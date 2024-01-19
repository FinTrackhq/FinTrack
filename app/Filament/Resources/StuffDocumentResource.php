<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StuffDocumentResource\Pages;
use App\Filament\Resources\StuffDocumentResource\RelationManagers;
use App\Models\StuffDocument;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StuffDocumentResource extends Resource
{
    protected static ?string $model = StuffDocument::class;
    protected static ?string $navigationGroup = 'Stuff management';
    protected static ?string $navigationLabel = 'Document';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('stuff_id')
                    ->relationship('stuff', 'full_name')
                    ->required(),
                Forms\Components\TextInput::make('passport_series')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('passport_number')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('passport_issued')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('passport_date')
                    ->required(),
                Forms\Components\TextInput::make('snils')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('stuff.full_name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('passport_series')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('passport_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('passport_issued')
                    ->searchable(),
                Tables\Columns\TextColumn::make('passport_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('snils')
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
            'index' => Pages\ListStuffDocuments::route('/'),
            'create' => Pages\CreateStuffDocument::route('/create'),
            'view' => Pages\ViewStuffDocument::route('/{record}'),
            'edit' => Pages\EditStuffDocument::route('/{record}/edit'),
        ];
    }
}

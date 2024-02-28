<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StuffDocumentResource\Pages;
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

    protected static ?string $slug = 'StuffDocument';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('stuff_id')
                    ->label(__('columns.stuff'))
                    ->relationship('stuff', 'full_name')
                    ->prefixIcon('heroicon-o-user')
                    ->required(),
                Forms\Components\TextInput::make('passport_series')
                    ->label(__('columns.passportSeries'))
                    ->required()
                    ->prefixIcon('heroicon-o-identification')
                    ->placeholder('0123')
                    ->minLength(4)
                    ->maxLength(4)
                    ->numeric(),
                Forms\Components\TextInput::make('passport_number')
                    ->label(__('columns.passportNumber'))
                    ->required()
                    ->placeholder('012345')
                    ->minLength(6)
                    ->maxLength(6)
                    ->prefixIcon('heroicon-o-identification')
                    ->numeric(),
                Forms\Components\TextInput::make('passport_issued')
                    ->label(__('columns.passportIssued'))
                    ->required()
                    ->placeholder('Russia, Voronezh region, c. Voronezh, prospekt Revolyutsii, house 20')
                    ->prefixIcon('heroicon-o-identification')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('passport_date')
                    ->label(__('columns.passportDate'))
                    ->required()
                    ->date()
                    ->prefixIcon('heroicon-o-identification'),
                Forms\Components\TextInput::make('snils')
                    ->label(__('columns.snils'))
                    ->required()
                    ->placeholder('01234567899')
                    ->minLength(11)
                    ->maxLength(11)
                    ->prefixIcon('heroicon-o-identification')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('stuff.full_name')
                    ->label(__('columns.fullName'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('passport_series')
                    ->label(__('columns.passportSeries'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('passport_number')
                    ->label(__('columns.passportNumber'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('passport_issued')
                    ->label(__('columns.passportIssued'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('passport_date')
                    ->label(__('columns.passportDate'))
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('snils')
                    ->label(__('columns.snils'))
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
            'index' => Pages\ListStuffDocuments::route('/'),
            'create' => Pages\CreateStuffDocument::route('/create'),
            'view' => Pages\ViewStuffDocument::route('/{record}'),
            'edit' => Pages\EditStuffDocument::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel() : string
    {
        return __('stuffDocument.stuffDocument');
    }
    public static function getPluralModelLabel() : string
    {
        return __('stuffDocument.stuffDocuments');
    }
}

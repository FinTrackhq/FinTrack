<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyExtractResource\Pages;
use App\Filament\Resources\CompanyExtractResource\RelationManagers;
use App\Models\CompanyExtract;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyExtractResource extends Resource
{
    protected static ?string $model = CompanyExtract::class;
    protected static ?string $navigationGroup = 'Company management';
    protected static ?string $navigationLabel = 'Extract';
    protected static ?string $modelLabel = 'Extract';
    protected static ?string $slug = 'Extract';
    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('coming')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('expenditure')
                    ->required()
                    ->maxLength(255)
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\Select::make('payment_id')
                    ->relationship('companyPayment', 'bic')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('coming')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expenditure')
                    ->searchable(),
                Tables\Columns\TextColumn::make('payment_id')
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
            'index' => Pages\ListCompanyExtracts::route('/'),
            'create' => Pages\CreateCompanyExtract::route('/create'),
            'view' => Pages\ViewCompanyExtract::route('/{record}'),
            'edit' => Pages\EditCompanyExtract::route('/{record}/edit'),
        ];
    }
}

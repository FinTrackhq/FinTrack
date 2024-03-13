<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyExtractResource\Pages;
use App\Models\CompanyExtract;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class CompanyExtractResource extends Resource
{
    protected static ?string $model = CompanyExtract::class;
    protected static ?string $navigationGroup = 'Company management';
    protected static ?string $slug = 'Extract';
    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('payment_id')
                    ->label(__('columns.payment'))
                    ->relationship('payment', 'account', modifyQueryUsing: fn (Builder $query) => $query->whereBelongsTo(Filament::getTenant()))
                    ->suffixIcon('heroicon-o-credit-card')
                    ->reactive()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label(__('columns.fullName'))
                    ->required()
                    ->suffixIcon('heroicon-o-user')
                    ->placeholder('Ivanov Ivan Ivanovich')
                    ->minLength(5)
                    ->maxLength(255),
                Forms\Components\TextInput::make('coming')
                    ->label(__('columns.coming'))
                    ->placeholder('Issuing salaries to an employee')
                    ->required()
                    ->suffixIcon('heroicon-o-question-mark-circle')
                    ->maxLength(255),
                Forms\Components\TextInput::make('expenditure')
                    ->label(__('columns.expenditure'))
                    ->placeholder('70000')
                    ->suffix('$')
                    ->numeric()
                    ->required()
                    ->minLength(1)
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('columns.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('coming')
                    ->label(__('columns.coming'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('expenditure')
                    ->label(__('columns.expenditure'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('payment.account')
                    ->label(__('columns.account'))
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
            'index' => Pages\ListCompanyExtracts::route('/'),
            'create' => Pages\CreateCompanyExtract::route('/create'),
            'view' => Pages\ViewCompanyExtract::route('/{record}'),
            'edit' => Pages\EditCompanyExtract::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel() : string
    {
        return __('extract.extract');
    }
    public static function getPluralModelLabel() : string
    {
        return __('extract.extracts');
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyPaymentResource\Pages;
use App\Models\CompanyPayment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CompanyPaymentResource extends Resource
{
    protected static ?string $model = CompanyPayment::class;

    protected static ?string $navigationGroup = 'Company management';

    protected  static ?string $slug ='Payment';
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('account')
                    ->label(__('columns.account'))
                    ->required()
                    ->prefixIcon('heroicon-o-banknotes')
                    ->numeric()
                    ->minLength(20)
                    ->maxLength(20)
                    ->placeholder('00000000000000000000'),
                Forms\Components\TextInput::make('bic')
                    ->label(__('columns.bic'))
                    ->required()
                    ->prefixIcon('heroicon-o-banknotes')
                    ->numeric()
                    ->placeholder('012345678')
                    ->minLength(9)
                    ->maxLength(9),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company.name')
                    ->label(__('columns.name'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('account')
                    ->label(__('columns.account'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bic')
                    ->label(__('columns.bic'))
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
            'index' => Pages\ListCompanyPayments::route('/'),
            'create' => Pages\CreateCompanyPayment::route('/create'),
            'view' => Pages\ViewCompanyPayment::route('/{record}'),
            'edit' => Pages\EditCompanyPayment::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel() : string
    {
        return __('payment.payment');
    }
    public static function getPluralModelLabel() : string
    {
        return __('payment.payments');
    }
}

<?php

namespace App\Filament\Resources\CompanyPurchaseResource\Pages;

use App\Filament\Resources\CompanyPurchaseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyPurchase extends EditRecord
{
    protected static string $resource = CompanyPurchaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

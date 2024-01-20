<?php

namespace App\Filament\Resources\CompanyPurchaseResource\Pages;

use App\Filament\Resources\CompanyPurchaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCompanyPurchase extends ViewRecord
{
    protected static string $resource = CompanyPurchaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

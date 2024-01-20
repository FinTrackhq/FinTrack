<?php

namespace App\Filament\Resources\CompanyPurchaseResource\Pages;

use App\Filament\Resources\CompanyPurchaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyPurchases extends ListRecords
{
    protected static string $resource = CompanyPurchaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\CompanyWarehouseResource\Pages;

use App\Filament\Resources\CompanyWarehouseResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCompanyWarehouse extends ViewRecord
{
    protected static string $resource = CompanyWarehouseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

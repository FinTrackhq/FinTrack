<?php

namespace App\Filament\Resources\CompanyWarehouseResource\Pages;

use App\Filament\Resources\CompanyWarehouseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyWarehouse extends EditRecord
{
    protected static string $resource = CompanyWarehouseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

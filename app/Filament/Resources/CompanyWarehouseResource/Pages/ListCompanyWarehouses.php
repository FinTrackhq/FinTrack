<?php

namespace App\Filament\Resources\CompanyWarehouseResource\Pages;

use App\Filament\Resources\CompanyWarehouseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyWarehouses extends ListRecords
{
    protected static string $resource = CompanyWarehouseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

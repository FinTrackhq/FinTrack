<?php

namespace App\Filament\Resources\CompanyExtractResource\Pages;

use App\Filament\Resources\CompanyExtractResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyExtracts extends ListRecords
{
    protected static string $resource = CompanyExtractResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\CompanyContactResource\Pages;

use App\Filament\Resources\CompanyContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyContacts extends ListRecords
{
    protected static string $resource = CompanyContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

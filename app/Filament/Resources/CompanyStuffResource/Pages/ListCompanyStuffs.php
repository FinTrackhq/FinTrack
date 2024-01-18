<?php

namespace App\Filament\Resources\CompanyStuffResource\Pages;

use App\Filament\Resources\CompanyStuffResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyStuffs extends ListRecords
{
    protected static string $resource = CompanyStuffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

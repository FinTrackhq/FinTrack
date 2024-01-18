<?php

namespace App\Filament\Resources\CompanyRequisiteResource\Pages;

use App\Filament\Resources\CompanyRequisiteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyRequisites extends ListRecords
{
    protected static string $resource = CompanyRequisiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

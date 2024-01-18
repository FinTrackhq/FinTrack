<?php

namespace App\Filament\Resources\CompanyRequisiteResource\Pages;

use App\Filament\Resources\CompanyRequisiteResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCompanyRequisite extends ViewRecord
{
    protected static string $resource = CompanyRequisiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

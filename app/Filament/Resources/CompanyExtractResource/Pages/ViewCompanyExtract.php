<?php

namespace App\Filament\Resources\CompanyExtractResource\Pages;

use App\Filament\Resources\CompanyExtractResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCompanyExtract extends ViewRecord
{
    protected static string $resource = CompanyExtractResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

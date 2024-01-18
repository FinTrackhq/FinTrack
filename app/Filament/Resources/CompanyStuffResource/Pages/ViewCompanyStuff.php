<?php

namespace App\Filament\Resources\CompanyStuffResource\Pages;

use App\Filament\Resources\CompanyStuffResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCompanyStuff extends ViewRecord
{
    protected static string $resource = CompanyStuffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

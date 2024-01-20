<?php

namespace App\Filament\Resources\CompanySaleResource\Pages;

use App\Filament\Resources\CompanySaleResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCompanySale extends ViewRecord
{
    protected static string $resource = CompanySaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

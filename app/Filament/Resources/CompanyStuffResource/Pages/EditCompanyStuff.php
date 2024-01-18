<?php

namespace App\Filament\Resources\CompanyStuffResource\Pages;

use App\Filament\Resources\CompanyStuffResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyStuff extends EditRecord
{
    protected static string $resource = CompanyStuffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

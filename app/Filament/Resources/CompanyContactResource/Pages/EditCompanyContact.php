<?php

namespace App\Filament\Resources\CompanyContactResource\Pages;

use App\Filament\Resources\CompanyContactResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyContact extends EditRecord
{
    protected static string $resource = CompanyContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

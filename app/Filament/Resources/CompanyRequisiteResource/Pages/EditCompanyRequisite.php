<?php

namespace App\Filament\Resources\CompanyRequisiteResource\Pages;

use App\Filament\Resources\CompanyRequisiteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyRequisite extends EditRecord
{
    protected static string $resource = CompanyRequisiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

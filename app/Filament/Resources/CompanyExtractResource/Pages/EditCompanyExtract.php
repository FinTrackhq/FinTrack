<?php

namespace App\Filament\Resources\CompanyExtractResource\Pages;

use App\Filament\Resources\CompanyExtractResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyExtract extends EditRecord
{
    protected static string $resource = CompanyExtractResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

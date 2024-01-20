<?php

namespace App\Filament\Resources\CompanySaleResource\Pages;

use App\Filament\Resources\CompanySaleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanySale extends EditRecord
{
    protected static string $resource = CompanySaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

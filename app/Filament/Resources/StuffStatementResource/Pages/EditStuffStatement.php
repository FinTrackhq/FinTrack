<?php

namespace App\Filament\Resources\StuffStatementResource\Pages;

use App\Filament\Resources\StuffStatementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStuffStatement extends EditRecord
{
    protected static string $resource = StuffStatementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

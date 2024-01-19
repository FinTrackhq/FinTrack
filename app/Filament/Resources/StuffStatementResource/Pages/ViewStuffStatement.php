<?php

namespace App\Filament\Resources\StuffStatementResource\Pages;

use App\Filament\Resources\StuffStatementResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStuffStatement extends ViewRecord
{
    protected static string $resource = StuffStatementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

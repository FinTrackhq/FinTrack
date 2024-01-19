<?php

namespace App\Filament\Resources\StuffStatementResource\Pages;

use App\Filament\Resources\StuffStatementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStuffStatements extends ListRecords
{
    protected static string $resource = StuffStatementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

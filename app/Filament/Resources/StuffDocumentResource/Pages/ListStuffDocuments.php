<?php

namespace App\Filament\Resources\StuffDocumentResource\Pages;

use App\Filament\Resources\StuffDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStuffDocuments extends ListRecords
{
    protected static string $resource = StuffDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

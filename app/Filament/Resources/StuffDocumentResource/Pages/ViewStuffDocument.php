<?php

namespace App\Filament\Resources\StuffDocumentResource\Pages;

use App\Filament\Resources\StuffDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStuffDocument extends ViewRecord
{
    protected static string $resource = StuffDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

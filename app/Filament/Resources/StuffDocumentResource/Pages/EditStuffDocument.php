<?php

namespace App\Filament\Resources\StuffDocumentResource\Pages;

use App\Filament\Resources\StuffDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStuffDocument extends EditRecord
{
    protected static string $resource = StuffDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

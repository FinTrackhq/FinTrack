<?php

namespace App\Filament\Resources\CompanySaleResource\Pages;

use App\Filament\Resources\CompanySaleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanySales extends ListRecords
{
    protected static string $resource = CompanySaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

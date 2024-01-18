<?php

namespace App\Filament\Resources\CompanyPaymentResource\Pages;

use App\Filament\Resources\CompanyPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyPayments extends ListRecords
{
    protected static string $resource = CompanyPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

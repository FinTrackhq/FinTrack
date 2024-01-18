<?php

namespace App\Filament\Resources\CompanyPaymentResource\Pages;

use App\Filament\Resources\CompanyPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyPayment extends EditRecord
{
    protected static string $resource = CompanyPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

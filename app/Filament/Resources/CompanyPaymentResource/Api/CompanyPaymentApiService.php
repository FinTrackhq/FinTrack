<?php
namespace App\Filament\Resources\CompanyPaymentResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\CompanyPaymentResource;
use Illuminate\Routing\Router;


class CompanyPaymentApiService extends ApiService
{
    protected static string | null $resource = CompanyPaymentResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];
        
    }
}

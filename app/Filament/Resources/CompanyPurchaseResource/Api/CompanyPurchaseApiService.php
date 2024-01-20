<?php
namespace App\Filament\Resources\CompanyPurchaseResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\CompanyPurchaseResource;
use Illuminate\Routing\Router;


class CompanyPurchaseApiService extends ApiService
{
    protected static string | null $resource = CompanyPurchaseResource::class;

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

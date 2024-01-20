<?php
namespace App\Filament\Resources\CompanyWarehouseResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\CompanyWarehouseResource;
use Illuminate\Routing\Router;


class CompanyWarehouseApiService extends ApiService
{
    protected static string | null $resource = CompanyWarehouseResource::class;

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

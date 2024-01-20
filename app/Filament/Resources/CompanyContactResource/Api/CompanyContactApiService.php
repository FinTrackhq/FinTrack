<?php
namespace App\Filament\Resources\CompanyContactResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\CompanyContactResource;
use Illuminate\Routing\Router;


class CompanyContactApiService extends ApiService
{
    protected static string | null $resource = CompanyContactResource::class;

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

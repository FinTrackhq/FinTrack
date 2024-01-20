<?php
namespace App\Filament\Resources\CompanyStuffResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\CompanyStuffResource;
use Illuminate\Routing\Router;


class CompanyStuffApiService extends ApiService
{
    protected static string | null $resource = CompanyStuffResource::class;

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

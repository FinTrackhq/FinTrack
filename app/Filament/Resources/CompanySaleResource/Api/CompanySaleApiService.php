<?php
namespace App\Filament\Resources\CompanySaleResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\CompanySaleResource;
use Illuminate\Routing\Router;


class CompanySaleApiService extends ApiService
{
    protected static string | null $resource = CompanySaleResource::class;

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

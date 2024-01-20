<?php
namespace App\Filament\Resources\StuffStatementResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\StuffStatementResource;
use Illuminate\Routing\Router;


class StuffStatementApiService extends ApiService
{
    protected static string | null $resource = StuffStatementResource::class;

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

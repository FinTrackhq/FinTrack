<?php
namespace App\Filament\Resources\StuffDocumentResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\StuffDocumentResource;
use Illuminate\Routing\Router;


class StuffDocumentApiService extends ApiService
{
    protected static string | null $resource = StuffDocumentResource::class;

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

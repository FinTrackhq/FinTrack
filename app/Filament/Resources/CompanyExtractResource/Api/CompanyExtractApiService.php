<?php
namespace App\Filament\Resources\CompanyExtractResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\CompanyExtractResource;
use Illuminate\Routing\Router;


class CompanyExtractApiService extends ApiService
{
    protected static string | null $resource = CompanyExtractResource::class;

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

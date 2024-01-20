<?php
namespace App\Filament\Resources\CompanyRequisiteResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\CompanyRequisiteResource;
use Illuminate\Routing\Router;


class CompanyRequisiteApiService extends ApiService
{
    protected static string | null $resource = CompanyRequisiteResource::class;

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

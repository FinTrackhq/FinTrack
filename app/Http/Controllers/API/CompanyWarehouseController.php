<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyWarehouse\UpdateCompanyWarehouseRequest;
use App\Http\Requests\CompanyWarehouse\CreateCompanyWarehouseRequest;
use App\Http\Resources\CompanyWarehouse\CompanyWarehouseResource;
use App\Models\CompanyWarehouse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyWarehouseController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $companyWarehouses = CompanyWarehouse::dynamicPaginate();

        return CompanyWarehouseResource::collection($companyWarehouses);
    }

    public function store(CreateCompanyWarehouseRequest $request): JsonResponse
    {
        $companyWarehouse = CompanyWarehouse::create($request->validated());

        return $this->responseCreated('CompanyWarehouse created successfully', new CompanyWarehouseResource($companyWarehouse));
    }

    public function show(CompanyWarehouse $companyWarehouse): JsonResponse
    {
        return $this->responseSuccess(null, new CompanyWarehouseResource($companyWarehouse));
    }

    public function update(UpdateCompanyWarehouseRequest $request, CompanyWarehouse $companyWarehouse): JsonResponse
    {
        $companyWarehouse->update($request->validated());

        return $this->responseSuccess('CompanyWarehouse updated Successfully', new CompanyWarehouseResource($companyWarehouse));
    }

    public function destroy(CompanyWarehouse $companyWarehouse): JsonResponse
    {
        $companyWarehouse->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $companyWarehouse = CompanyWarehouse::onlyTrashed()->findOrFail($id);

        $companyWarehouse->restore();

        return $this->responseSuccess('CompanyWarehouse restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $companyWarehouse = CompanyWarehouse::withTrashed()->findOrFail($id);

        $companyWarehouse->forceDelete();

        return $this->responseDeleted();
    }
}

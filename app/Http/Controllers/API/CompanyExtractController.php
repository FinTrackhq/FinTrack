<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyExtract\UpdateCompanyExtractRequest;
use App\Http\Requests\CompanyExtract\CreateCompanyExtractRequest;
use App\Http\Resources\CompanyExtract\CompanyExtractResource;
use App\Models\CompanyExtract;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyExtractController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $companyExtracts = CompanyExtract::dynamicPaginate();

        return CompanyExtractResource::collection($companyExtracts);
    }

    public function store(CreateCompanyExtractRequest $request): JsonResponse
    {
        $companyExtract = CompanyExtract::create($request->validated());

        return $this->responseCreated('CompanyExtract created successfully', new CompanyExtractResource($companyExtract));
    }

    public function show(CompanyExtract $companyExtract): JsonResponse
    {
        return $this->responseSuccess(null, new CompanyExtractResource($companyExtract));
    }

    public function update(UpdateCompanyExtractRequest $request, CompanyExtract $companyExtract): JsonResponse
    {
        $companyExtract->update($request->validated());

        return $this->responseSuccess('CompanyExtract updated Successfully', new CompanyExtractResource($companyExtract));
    }

    public function destroy(CompanyExtract $companyExtract): JsonResponse
    {
        $companyExtract->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $companyExtract = CompanyExtract::onlyTrashed()->findOrFail($id);

        $companyExtract->restore();

        return $this->responseSuccess('CompanyExtract restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $companyExtract = CompanyExtract::withTrashed()->findOrFail($id);

        $companyExtract->forceDelete();

        return $this->responseDeleted();
    }
}

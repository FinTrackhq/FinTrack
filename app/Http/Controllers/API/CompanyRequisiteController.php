<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequisite\UpdateCompanyRequisiteRequest;
use App\Http\Requests\CompanyRequisite\CreateCompanyRequisiteRequest;
use App\Http\Resources\CompanyRequisite\CompanyRequisiteResource;
use App\Models\CompanyRequisite;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyRequisiteController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $companyRequisites = CompanyRequisite::dynamicPaginate();

        return CompanyRequisiteResource::collection($companyRequisites);
    }

    public function store(CreateCompanyRequisiteRequest $request): JsonResponse
    {
        $companyRequisite = CompanyRequisite::create($request->validated());

        return $this->responseCreated('CompanyRequisite created successfully', new CompanyRequisiteResource($companyRequisite));
    }

    public function show(CompanyRequisite $companyRequisite): JsonResponse
    {
        return $this->responseSuccess(null, new CompanyRequisiteResource($companyRequisite));
    }

    public function update(UpdateCompanyRequisiteRequest $request, CompanyRequisite $companyRequisite): JsonResponse
    {
        $companyRequisite->update($request->validated());

        return $this->responseSuccess('CompanyRequisite updated Successfully', new CompanyRequisiteResource($companyRequisite));
    }

    public function destroy(CompanyRequisite $companyRequisite): JsonResponse
    {
        $companyRequisite->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $companyRequisite = CompanyRequisite::onlyTrashed()->findOrFail($id);

        $companyRequisite->restore();

        return $this->responseSuccess('CompanyRequisite restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $companyRequisite = CompanyRequisite::withTrashed()->findOrFail($id);

        $companyRequisite->forceDelete();

        return $this->responseDeleted();
    }
}

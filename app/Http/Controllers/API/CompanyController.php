<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\UpdateCompanyRequest;
use App\Http\Requests\Company\CreateCompanyRequest;
use App\Http\Resources\Company\CompanyResource;
use App\Models\Company;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $companies = Company::dynamicPaginate();

        return CompanyResource::collection($companies);
    }

    public function store(CreateCompanyRequest $request): JsonResponse
    {
        $company = Company::create($request->validated());

        return $this->responseCreated('Company created successfully', new CompanyResource($company));
    }

    public function show(Company $company): JsonResponse
    {
        return $this->responseSuccess(null, new CompanyResource($company));
    }

    public function update(UpdateCompanyRequest $request, Company $company): JsonResponse
    {
        $company->update($request->validated());

        return $this->responseSuccess('Company updated Successfully', new CompanyResource($company));
    }

    public function destroy(Company $company): JsonResponse
    {
        $company->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $company = Company::onlyTrashed()->findOrFail($id);

        $company->restore();

        return $this->responseSuccess('Company restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $company = Company::withTrashed()->findOrFail($id);

        $company->forceDelete();

        return $this->responseDeleted();
    }
}

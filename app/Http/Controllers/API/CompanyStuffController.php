<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyStuff\UpdateCompanyStuffRequest;
use App\Http\Requests\CompanyStuff\CreateCompanyStuffRequest;
use App\Http\Resources\CompanyStuff\CompanyStuffResource;
use App\Models\CompanyStuff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyStuffController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $companyStuffs = CompanyStuff::dynamicPaginate();

        return CompanyStuffResource::collection($companyStuffs);
    }

    public function store(CreateCompanyStuffRequest $request): JsonResponse
    {
        $companyStuff = CompanyStuff::create($request->validated());

        return $this->responseCreated('CompanyStuff created successfully', new CompanyStuffResource($companyStuff));
    }

    public function show(CompanyStuff $companyStuff): JsonResponse
    {
        return $this->responseSuccess(null, new CompanyStuffResource($companyStuff));
    }

    public function update(UpdateCompanyStuffRequest $request, CompanyStuff $companyStuff): JsonResponse
    {
        $companyStuff->update($request->validated());

        return $this->responseSuccess('CompanyStuff updated Successfully', new CompanyStuffResource($companyStuff));
    }

    public function destroy(CompanyStuff $companyStuff): JsonResponse
    {
        $companyStuff->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $companyStuff = CompanyStuff::onlyTrashed()->findOrFail($id);

        $companyStuff->restore();

        return $this->responseSuccess('CompanyStuff restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $companyStuff = CompanyStuff::withTrashed()->findOrFail($id);

        $companyStuff->forceDelete();

        return $this->responseDeleted();
    }
}

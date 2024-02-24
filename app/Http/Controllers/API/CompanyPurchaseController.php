<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyPurchase\UpdateCompanyPurchaseRequest;
use App\Http\Requests\CompanyPurchase\CreateCompanyPurchaseRequest;
use App\Http\Resources\CompanyPurchase\CompanyPurchaseResource;
use App\Models\CompanyPurchase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyPurchaseController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $companyPurchases = CompanyPurchase::dynamicPaginate();

        return CompanyPurchaseResource::collection($companyPurchases);
    }

    public function store(CreateCompanyPurchaseRequest $request): JsonResponse
    {
        $companyPurchase = CompanyPurchase::create($request->validated());

        return $this->responseCreated('CompanyPurchase created successfully', new CompanyPurchaseResource($companyPurchase));
    }

    public function show(CompanyPurchase $companyPurchase): JsonResponse
    {
        return $this->responseSuccess(null, new CompanyPurchaseResource($companyPurchase));
    }

    public function update(UpdateCompanyPurchaseRequest $request, CompanyPurchase $companyPurchase): JsonResponse
    {
        $companyPurchase->update($request->validated());

        return $this->responseSuccess('CompanyPurchase updated Successfully', new CompanyPurchaseResource($companyPurchase));
    }

    public function destroy(CompanyPurchase $companyPurchase): JsonResponse
    {
        $companyPurchase->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $companyPurchase = CompanyPurchase::onlyTrashed()->findOrFail($id);

        $companyPurchase->restore();

        return $this->responseSuccess('CompanyPurchase restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $companyPurchase = CompanyPurchase::withTrashed()->findOrFail($id);

        $companyPurchase->forceDelete();

        return $this->responseDeleted();
    }
}

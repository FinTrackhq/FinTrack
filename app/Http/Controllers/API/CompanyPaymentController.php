<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyPayment\UpdateCompanyPaymentRequest;
use App\Http\Requests\CompanyPayment\CreateCompanyPaymentRequest;
use App\Http\Resources\CompanyPayment\CompanyPaymentResource;
use App\Models\CompanyPayment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyPaymentController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $companyPayments = CompanyPayment::dynamicPaginate();

        return CompanyPaymentResource::collection($companyPayments);
    }

    public function store(CreateCompanyPaymentRequest $request): JsonResponse
    {
        $companyPayment = CompanyPayment::create($request->validated());

        return $this->responseCreated('CompanyPayment created successfully', new CompanyPaymentResource($companyPayment));
    }

    public function show(CompanyPayment $companyPayment): JsonResponse
    {
        return $this->responseSuccess(null, new CompanyPaymentResource($companyPayment));
    }

    public function update(UpdateCompanyPaymentRequest $request, CompanyPayment $companyPayment): JsonResponse
    {
        $companyPayment->update($request->validated());

        return $this->responseSuccess('CompanyPayment updated Successfully', new CompanyPaymentResource($companyPayment));
    }

    public function destroy(CompanyPayment $companyPayment): JsonResponse
    {
        $companyPayment->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $companyPayment = CompanyPayment::onlyTrashed()->findOrFail($id);

        $companyPayment->restore();

        return $this->responseSuccess('CompanyPayment restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $companyPayment = CompanyPayment::withTrashed()->findOrFail($id);

        $companyPayment->forceDelete();

        return $this->responseDeleted();
    }
}

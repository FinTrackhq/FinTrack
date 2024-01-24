<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyContact\UpdateCompanyContactRequest;
use App\Http\Requests\CompanyContact\CreateCompanyContactRequest;
use App\Http\Resources\CompanyContact\CompanyContactResource;
use App\Models\CompanyContact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyContactController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $companyContacts = CompanyContact::dynamicPaginate();

        return CompanyContactResource::collection($companyContacts);
    }

    public function store(CreateCompanyContactRequest $request): JsonResponse
    {
        $companyContact = CompanyContact::create($request->validated());

        return $this->responseCreated('CompanyContact created successfully', new CompanyContactResource($companyContact));
    }

    public function show(CompanyContact $companyContact): JsonResponse
    {
        return $this->responseSuccess(null, new CompanyContactResource($companyContact));
    }

    public function update(UpdateCompanyContactRequest $request, CompanyContact $companyContact): JsonResponse
    {
        $companyContact->update($request->validated());

        return $this->responseSuccess('CompanyContact updated Successfully', new CompanyContactResource($companyContact));
    }

    public function destroy(CompanyContact $companyContact): JsonResponse
    {
        $companyContact->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $companyContact = CompanyContact::onlyTrashed()->findOrFail($id);

        $companyContact->restore();

        return $this->responseSuccess('CompanyContact restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $companyContact = CompanyContact::withTrashed()->findOrFail($id);

        $companyContact->forceDelete();

        return $this->responseDeleted();
    }
}

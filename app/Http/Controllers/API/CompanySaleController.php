<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanySale\UpdateCompanySaleRequest;
use App\Http\Requests\CompanySale\CreateCompanySaleRequest;
use App\Http\Resources\CompanySale\CompanySaleResource;
use App\Models\CompanySale;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanySaleController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $companySales = CompanySale::dynamicPaginate();

        return CompanySaleResource::collection($companySales);
    }

    public function store(CreateCompanySaleRequest $request): JsonResponse
    {
        $companySale = CompanySale::create($request->validated());

        return $this->responseCreated('CompanySale created successfully', new CompanySaleResource($companySale));
    }

    public function show(CompanySale $companySale): JsonResponse
    {
        return $this->responseSuccess(null, new CompanySaleResource($companySale));
    }

    public function update(UpdateCompanySaleRequest $request, CompanySale $companySale): JsonResponse
    {
        $companySale->update($request->validated());

        return $this->responseSuccess('CompanySale updated Successfully', new CompanySaleResource($companySale));
    }

    public function destroy(CompanySale $companySale): JsonResponse
    {
        $companySale->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $companySale = CompanySale::onlyTrashed()->findOrFail($id);

        $companySale->restore();

        return $this->responseSuccess('CompanySale restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $companySale = CompanySale::withTrashed()->findOrFail($id);

        $companySale->forceDelete();

        return $this->responseDeleted();
    }
}

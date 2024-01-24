<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanAccount\UpdatePlanAccountRequest;
use App\Http\Requests\PlanAccount\CreatePlanAccountRequest;
use App\Http\Resources\PlanAccount\PlanAccountResource;
use App\Models\PlanAccount;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PlanAccountController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $planAccounts = PlanAccount::dynamicPaginate();

        return PlanAccountResource::collection($planAccounts);
    }

    public function store(CreatePlanAccountRequest $request): JsonResponse
    {
        $planAccount = PlanAccount::create($request->validated());

        return $this->responseCreated('PlanAccount created successfully', new PlanAccountResource($planAccount));
    }

    public function show(PlanAccount $planAccount): JsonResponse
    {
        return $this->responseSuccess(null, new PlanAccountResource($planAccount));
    }

    public function update(UpdatePlanAccountRequest $request, PlanAccount $planAccount): JsonResponse
    {
        $planAccount->update($request->validated());

        return $this->responseSuccess('PlanAccount updated Successfully', new PlanAccountResource($planAccount));
    }

    public function destroy(PlanAccount $planAccount): JsonResponse
    {
        $planAccount->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $planAccount = PlanAccount::onlyTrashed()->findOrFail($id);

        $planAccount->restore();

        return $this->responseSuccess('PlanAccount restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $planAccount = PlanAccount::withTrashed()->findOrFail($id);

        $planAccount->forceDelete();

        return $this->responseDeleted();
    }
}

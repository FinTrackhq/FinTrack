<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StuffStatement\UpdateStuffStatementRequest;
use App\Http\Requests\StuffStatement\CreateStuffStatementRequest;
use App\Http\Resources\StuffStatement\StuffStatementResource;
use App\Models\StuffStatement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class StuffStatementController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $stuffStatements = StuffStatement::dynamicPaginate();

        return StuffStatementResource::collection($stuffStatements);
    }

    public function store(CreateStuffStatementRequest $request): JsonResponse
    {
        $stuffStatement = StuffStatement::create($request->validated());

        return $this->responseCreated('StuffStatement created successfully', new StuffStatementResource($stuffStatement));
    }

    public function show(StuffStatement $stuffStatement): JsonResponse
    {
        return $this->responseSuccess(null, new StuffStatementResource($stuffStatement));
    }

    public function update(UpdateStuffStatementRequest $request, StuffStatement $stuffStatement): JsonResponse
    {
        $stuffStatement->update($request->validated());

        return $this->responseSuccess('StuffStatement updated Successfully', new StuffStatementResource($stuffStatement));
    }

    public function destroy(StuffStatement $stuffStatement): JsonResponse
    {
        $stuffStatement->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $stuffStatement = StuffStatement::onlyTrashed()->findOrFail($id);

        $stuffStatement->restore();

        return $this->responseSuccess('StuffStatement restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $stuffStatement = StuffStatement::withTrashed()->findOrFail($id);

        $stuffStatement->forceDelete();

        return $this->responseDeleted();
    }
}

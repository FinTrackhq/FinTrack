<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StuffDocument\UpdateStuffDocumentRequest;
use App\Http\Requests\StuffDocument\CreateStuffDocumentRequest;
use App\Http\Resources\StuffDocument\StuffDocumentResource;
use App\Models\StuffDocument;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
class StuffDocumentController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $stuffDocuments = StuffDocument::dynamicPaginate();

        return StuffDocumentResource::collection($stuffDocuments);
    }

    public function store(CreateStuffDocumentRequest $request): JsonResponse
    {
        $stuffDocument = StuffDocument::create($request->validated());

        return $this->responseCreated('StuffDocument created successfully', new StuffDocumentResource($stuffDocument));
    }

    public function show(StuffDocument $stuffDocument): JsonResponse
    {
        return $this->responseSuccess(null, new StuffDocumentResource($stuffDocument));
    }

    public function update(UpdateStuffDocumentRequest $request, StuffDocument $stuffDocument): JsonResponse
    {
        $stuffDocument->update($request->validated());

        return $this->responseSuccess('StuffDocument updated Successfully', new StuffDocumentResource($stuffDocument));
    }

    public function destroy(StuffDocument $stuffDocument): JsonResponse
    {
        $stuffDocument->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $stuffDocument = StuffDocument::onlyTrashed()->findOrFail($id);

        $stuffDocument->restore();

        return $this->responseSuccess('StuffDocument restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $stuffDocument = StuffDocument::withTrashed()->findOrFail($id);

        $stuffDocument->forceDelete();

        return $this->responseDeleted();
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $users = User::dynamicPaginate();

        return UserResource::collection($users);
    }

    public function store(CreateUserRequest $request): JsonResponse
    {
        $user = User::create($request->validated());

        return $this->responseCreated('User created successfully', new UserResource($user));
    }

    public function show(User $user): JsonResponse
    {
        return $this->responseSuccess(null, new UserResource($user));
    }

    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        $user->update($request->validated());

        return $this->responseSuccess('User updated Successfully', new UserResource($user));
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return $this->responseDeleted();
    }

   public function restore($id): JsonResponse
    {
        $user = User::onlyTrashed()->findOrFail($id);

        $user->restore();

        return $this->responseSuccess('User restored Successfully.');
    }

    public function permanentDelete($id): JsonResponse
    {
        $user = User::withTrashed()->findOrFail($id);

        $user->forceDelete();

        return $this->responseDeleted();
    }
}

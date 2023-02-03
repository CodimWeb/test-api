<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\User\UserService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function __construct(private UserService $userService)
    {

    }

    public function create(UserRequest $request): JsonResponse {
        $data = $request->validated();
        return $this->userService->create($data);
    }
}

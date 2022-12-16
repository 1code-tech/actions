<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Actions\Users\CreateUserData;
use App\Actions\Users\CreateUserAction;
use App\Actions\Auth\AuthenticateUserAction;
use App\Http\Requests\Api\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $validated = $request->validated();

        $data = new CreateUserData(
            name: $validated['name'],
            email: $validated['email'],
            password: $validated['password'],
        );

        $user = (new CreateUserAction)->run($data);

        $token = (new AuthenticateUserAction)->withToken(
            $user,
            $validated['device'],
        );

        return UserResource::make($user)
            ->additional(compact('token'));
    }
}

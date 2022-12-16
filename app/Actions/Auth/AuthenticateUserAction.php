<?php

namespace App\Actions\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticateUserAction
{
    public function withSession(User $user): void
    {
        Auth::login($user);
    }

    public function withToken(User $user, string $name): string
    {
        $token = $user->createToken($name);

        return $token->plainTextToken;
    }
}

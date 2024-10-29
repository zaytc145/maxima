<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Authenticate
{
    public function __invoke(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (
            $user &&
            Hash::check($request->password, $user->password)
        ) {
            $token = $request->user()->generateToken();

            return ['token' => $token->plainTextToken];
        }
    }
}

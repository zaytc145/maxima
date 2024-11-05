<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function show()
    {
        if (auth()->user()->avatar) {
            return Storage::disk('public')->download(auth()->user()->avatar);
        }

        return null;
    }

    public function update(Request $request)
    {
        $file = $request->file('avatar');
        $path = Storage::disk('public')->put('avatars', $file);
        auth()->user()->update(['avatar' => $path]);

        return auth()->user();
    }

    public function destroy(Request $request)
    {
        Storage::disk('public')->delete(auth()->user()->avatar);
        auth()->user()->update(['avatar' => null]);
        return true;
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'       => 'required|email',
            'password'    => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            throw ValidationException::withMessages(['email' => ['用户不存在']]);
        }
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages(['email' => ['账号或者密码不正确']]);
        }
        if ($user->is_admin == 0) {
            throw ValidationException::withMessages(['email' => ['权限不足']]);
        }

        return ['as' => 'Bearer', 'token' => $user->createToken($request->device_name)->plainTextToken];
    }

    public function me(Request $request)
    {
        return $request->user();
    }

    public function loginOut(Request $request, $id)
    {
        $user = User::find($id)->tokens()->where('tokenable_id', $id)->delete();

        return ['message' => 'ok'];
    }
}

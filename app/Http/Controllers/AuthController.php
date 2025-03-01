<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $this->success(
            'user has token',
            ['token' => $user->createToken($request->email)->plainTextToken]
        );
    }

    public function logout()
    {

    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $user->assignRole('customer');

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('users/'.$user->id,'public');
            $user->photos()->create([
                'full_name' => $request->file('photo')->getClientOriginalName(),
                'path' => $path
            ]);
        }

        auth()->login($user);
        return $this->success(
            'user created', 
            ['token' => $user->createToken($request->email)->plainTextToken]
        );
    }

    public function changePassword()
    {

    }

    public function user(Request $request)
    {
        return $this->response(new UserResource($request->user()));
    }
}

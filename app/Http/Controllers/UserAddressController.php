<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;
use App\Models\User;

class UserAddressController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return $this->response(auth()->user()->addresses);
    }

    public function store(StoreUserAddressRequest $request)
    {
        $address = auth()->user()->addresses()->create($request->toArray());
        return $this->success('Shipping address created successfully', $address);
    }

    public function show(UserAddress $userAddress)
    {
        //
    }

    public function update(UpdateUserAddressRequest $request, UserAddress $userAddress)
    {
        //
    }

    public function destroy(UserAddress $userAddress)
    {
        //
    }
}

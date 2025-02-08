<?php

namespace App\Http\Controllers;

use App\Models\UserSetting;
use App\Http\Requests\StoreUserSettingRequest;
use App\Http\Requests\UpdateUserSettingRequest;
use App\Http\Resources\UserSettingResource;


class UserSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return $this->response(UserSettingResource::collection(auth()->user()->settings));
    }

    public function store(StoreUserSettingRequest $request)
    {
        if (auth()->user()->settings()->where( 'setting_id',$request->setting_id)->exists()) {
            return $this->error('Setting already exists');
        }

        $userSetting = auth()->user()->settings()->create([
            'setting_id' => $request->setting_id,
            'value_id' => $request->value_id ?? null,
            'switch' => $request->switch ?? null,
        ]);

        return $this->success('User Setting Created', $userSetting);
    }

    public function show(UserSetting $userSetting)
    {
        //
    }

    public function update(UpdateUserSettingRequest $request, UserSetting $userSetting)
    {
        $userSetting->update([
            'switch' => $request->switch ?? null,
            'value_id' => $request->value_id ?? null,
        ]);

        return $this->success('User Setting Updated');
    }

    public function destroy(UserSetting $userSetting)
    {
        $userSetting->delete();

        return $this->success('User Setting Deleted');
    }

}

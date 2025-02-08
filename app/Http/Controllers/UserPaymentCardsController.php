<?php

namespace App\Http\Controllers;

use App\Models\UserPaymentCards;
use App\Http\Requests\StoreUserPaymentCardsRequest;
use App\Http\Requests\UpdateUserPaymentCardsRequest;
use App\Http\Resources\UserPaymentCardResource;

class UserPaymentCardsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return $this->response(UserPaymentCardResource::collection(auth()->user()->paymentCards));

    }

    public function store(StoreUserPaymentCardsRequest $request)
    {
        $card = auth()->user()->paymentCards()->create([
            'name' => encrypt($request->name),
            'number' => encrypt($request->number),
            'exp_date' => encrypt($request->exp_date),
            'holder_name' => encrypt($request->holder_name),
            'last_four_number' => encrypt(substr($request->number, -4)),
            'payment_card_type_id' => $request->payment_card_type_id,
        ]);

        return $this->success('card added successfully');
    }

    public function show(UserPaymentCards $userPaymentCards)
    {
        //
    }

    public function destroy(UserPaymentCards $userPaymentCards)
    {
        //
    }
}

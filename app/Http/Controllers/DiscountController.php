<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;
use App\Models\Discount;

class DiscountController extends Controller
{

    public function index()
    {
        return $this->response(Discount::all());
    }

    public function store(StoreDiscountRequest $request)
    {
        $discount = Discount::create($request->validated());
        return $this->success('discount created', $discount);
    }

    public function show(Discount $discount)
    {
        //
    }

    public function update(UpdateDiscountRequest $request, Discount $discount)
    {
        $discount->update($request->validated());

        return $this->success('discount updated');
    }

    public function destroy(Discount $discount)
    {
        $discount->delete();

        return $this->success('discount deleted');
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        if ($this->discount) {
            if ($this->discount->sum) {
                $discountedPrice = $this->price - $this->discount->sum;
            } else if ($this->discount->percent) {
                $discountedPrice = $this->price * ((100 - $this->discount->percent) / 100);
            }
        }

        return [
            'id' => $this->id,
            'name' => $this->getTranslations('name'),
            'price' => $this->price,
            'description' => $this->getTranslations('description'),
            'category' => new CategoryResource($this->category),
            'inventory' => StockResource::collection($this->stocks),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'order_quantity' => $this->when(isset($this->quantity), $this->quantity),
            'photos' => PhotoResource::collection($this->photos),
            'discount' => $this->discount,
            'discounted_price' => $discountedPrice ?? null
        ]; 
    }
}

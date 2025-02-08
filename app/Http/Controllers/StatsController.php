<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;
use App\Models\DeliveryMethod;
use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\LazyCollection;

class StatsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:sanctum');
    }

    // Count the number of orders

    public function ordersCount(Request $request) {

        $from  = Carbon::now()->subMonth();
        $to = Carbon::now();

        if ($request->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(
            Order::query()
            ->whereBetween('created_at', [$from , Carbon::parse($to)->endOfDay()])
            ->whereRelation('status', 'code', 'closed')
            ->count());
    }

      public function ordersSalesSum(Request $request) {

        $from  = Carbon::now()->subMonth();
        $to = Carbon::now();

        if ($request->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(
            Order::query()
            ->whereBetween('created_at', [$from , Carbon::parse($to)->endOfDay()])
            ->whereRelation('status', 'code', 'closed')
            ->sum('sum'));
    }

    public function deliveryMethodRatio(Request $request){

        // if (Cache::has('deliveryMethodRatio')) {
        //     return Cache::get('deliveryMethodRatio');
        // }

        $from  = Carbon::now()->subMonth();
        $to = Carbon::now();

        if ($request->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        $response = [];

        $allOrders = Order::query()
            ->whereBetween('created_at', [$from , Carbon::parse($to)->endOfDay()])
            ->whereRelation('status', 'code', 'closed')
            ->count();


        foreach ( DeliveryMethod::all() as $deliveryMethod) {

            $deliveryMethodOrders = $deliveryMethod->orders()
            ->whereBetween('created_at', [$from , Carbon::parse($to)->endOfDay()])
            ->whereRelation('status', 'code', 'closed')
            ->count();

            $response[] = [
                'name' => $deliveryMethod->getTranslations('name'),
                'percentage' => round($deliveryMethodOrders * 100 / $allOrders),
                'amount' => $deliveryMethodOrders
            ];
        }

        // Cache::put('deliveryMethodRatio', $response, now()->addDay());

        return $this->response($response);
    }


    public function ordersCountByDay(Request $request) {
        $from  = Carbon::now()->subMonth();
        $to = Carbon::now();

        if (request()->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        $days = CarbonPeriod::create($from, $to);
        $response = new Collection();

        LazyCollection::make($days->toArray())->each(function ($day) use ($from, $to, $response){
            $count = Order::query()
                ->whereBetween('created_at', [$day->startOfDay()->toDateTimeString(), $day->endOfDay()->toDateTimeString()])
                ->whereRelation('status', 'code', 'closed')
                ->count();
            // dd($day->format('Y-m-d'), $count);

            $response[] = [
                'date' => $day->format('Y-m-d'),
                'count' => $count
            ];
        });

        return $this->response($response);




    }
}

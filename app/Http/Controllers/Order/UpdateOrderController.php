<?php

namespace App\Http\Controllers\Order;

use App\Models\Shift;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UpdateOrderController extends Controller
{
    public function __invoke(Shift $order, Request $request) {

        $order->fill($request->all());

        $order->calculateTotal();

        $order->saveOrFail();

        return $order->fresh();

    }
}

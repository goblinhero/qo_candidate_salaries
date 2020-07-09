<?php

namespace App\Http\Controllers\Order;

use App\Models\Shift;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CreateOrderController extends Controller
{
    public function __invoke(Request $request) {
        $order = new Shift($request->all());

        $order->calculateTotal();

        $order->saveOrFail();

        return response()
            ->json(
                $order->fresh(),
                201
            );
    }
}

<?php

namespace App\Http\Controllers\Order;

use App\Models\Shift;
use Illuminate\Routing\Controller;

class DeleteOrderController extends Controller
{
    public function __invoke(Shift $order) {

        $order->delete();

        return response()->json($order, 200);

    }
}

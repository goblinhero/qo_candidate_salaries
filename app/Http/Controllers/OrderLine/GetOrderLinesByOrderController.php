<?php

namespace App\Http\Controllers\OrderLine;

use App\Models\Shift;
use Illuminate\Routing\Controller;

class GetOrderLinesByOrderController extends Controller
{
    public function __invoke(Shift $order) {
        return response()->json($order->lines);
    }
}

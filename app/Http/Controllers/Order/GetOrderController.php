<?php

namespace App\Http\Controllers\Order;

use App\Models\Shift;
use Illuminate\Routing\Controller;

class GetOrderController extends Controller
{
    public function __invoke(Shift $order) {
        return $order;
    }
}

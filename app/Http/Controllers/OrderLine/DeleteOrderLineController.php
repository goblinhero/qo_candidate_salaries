<?php

namespace App\Http\Controllers\OrderLine;

use App\Models\Shift;
use App\Models\SupplementalSalary;
use Illuminate\Routing\Controller;

class DeleteOrderLineController extends Controller
{
    public function __invoke(Shift $order, SupplementalSalary $orderLine) {

        $orderLine->delete();

        $order->calculateTotal();

        $order->saveOrFail();

        return response($orderLine, 200);
    }
}

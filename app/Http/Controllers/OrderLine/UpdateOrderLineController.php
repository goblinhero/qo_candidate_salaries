<?php

namespace App\Http\Controllers\OrderLine;

use App\Models\Shift;
use App\Models\SupplementalSalary;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UpdateOrderLineController extends Controller
{
    public function __invoke(Shift $order, SupplementalSalary $orderLine, Request $request) {

        $orderLine->update($request->all());

        $order->calculateTotal();

        $order->saveOrFail();

        return $orderLine->fresh();

    }
}

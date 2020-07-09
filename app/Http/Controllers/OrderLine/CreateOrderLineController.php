<?php

namespace App\Http\Controllers\OrderLine;

use App\Models\Shift;
use App\Models\SupplementalSalary;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CreateOrderLineController extends Controller
{
    public function __invoke(Shift $order, Request $request) {

        $orderLine = new SupplementalSalary($request->all());

        $order->lines()->save($orderLine);

        $order->calculateTotal();

        $order->saveOrFail();

        return response()
            ->json(
                $orderLine->fresh(),
                201
            );
    }
}

<?php

namespace App\Http\Controllers\Order;

use App\Models\Shift;
use Illuminate\Routing\Controller;

class GetOrdersController extends Controller
{
    public function __invoke() {
        return Shift::all();
    }
}

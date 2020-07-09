<?php

namespace App\Http\Controllers\OrderLine;

use App\Models\SupplementalSalary;
use Illuminate\Routing\Controller;

class GetOrderLineController extends Controller
{
    public function __invoke(SupplementalSalary $orderLine) {
        return $orderLine;
    }
}

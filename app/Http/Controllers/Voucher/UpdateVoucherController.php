<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Waiter;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UpdateVoucherController extends Controller
{
    public function __invoke(Waiter $voucher, Request $request) {

        $voucher->update($request->all());

        return $voucher->fresh();

    }
}

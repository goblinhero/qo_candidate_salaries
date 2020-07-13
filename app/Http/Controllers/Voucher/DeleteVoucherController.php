<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Waiter;
use Illuminate\Routing\Controller;

class DeleteVoucherController extends Controller
{
    public function __invoke(Waiter $voucher) {

        $voucher->delete();

        return response($voucher, 200);

    }
}

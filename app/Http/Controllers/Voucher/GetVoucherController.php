<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Waiter;
use Illuminate\Routing\Controller;

class GetVoucherController extends Controller
{
    public function __invoke(Waiter $voucher) {
        return $voucher;
    }
}

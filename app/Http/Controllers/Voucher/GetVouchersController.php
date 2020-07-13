<?php

namespace App\Http\Controllers\Voucher;

use App\Models\Waiter;
use Illuminate\Routing\Controller;

class GetVouchersController extends Controller
{
    public function __invoke() {
        return Waiter::all();
    }
}

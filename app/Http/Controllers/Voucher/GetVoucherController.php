<?php

namespace App\Http\Controllers\Voucher;

use App\Models\User;
use Illuminate\Routing\Controller;

class GetVoucherController extends Controller
{
    public function __invoke(User $voucher) {
        return $voucher;
    }
}

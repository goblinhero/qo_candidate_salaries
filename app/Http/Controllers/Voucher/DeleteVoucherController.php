<?php

namespace App\Http\Controllers\Voucher;

use App\Models\User;
use Illuminate\Routing\Controller;

class DeleteVoucherController extends Controller
{
    public function __invoke(User $voucher) {

        $voucher->delete();

        return response($voucher, 200);

    }
}

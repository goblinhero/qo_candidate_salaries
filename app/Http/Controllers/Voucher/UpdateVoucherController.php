<?php

namespace App\Http\Controllers\Voucher;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UpdateVoucherController extends Controller
{
    public function __invoke(User $voucher, Request $request) {

        $voucher->update($request->all());

        return $voucher->fresh();

    }
}

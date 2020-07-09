<?php

namespace App\Http\Controllers\Voucher;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CreateVoucherController extends Controller
{
    public function __invoke(Request $request) {
        $voucher = new User($request->all());

        $voucher->saveOrFail();

        return response()
            ->json(
                $voucher->fresh(),
                201
            );
    }
}

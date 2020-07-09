<?php

namespace App\Http\Controllers\Voucher;

use App\Models\User;
use Illuminate\Routing\Controller;

class GetVouchersController extends Controller
{
    public function __invoke() {
        return User::all();
    }
}

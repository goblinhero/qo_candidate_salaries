<?php

namespace App\Http\Controllers\Product;

use App\Models\Group;
use Illuminate\Routing\Controller;

class GetProductsController extends Controller
{
    public function __invoke() {
        return Group::all();
    }
}

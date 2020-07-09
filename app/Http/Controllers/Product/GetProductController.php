<?php

namespace App\Http\Controllers\Product;

use App\Models\Group;
use Illuminate\Routing\Controller;

class GetProductController extends Controller
{
    public function __invoke(Group $product) {
        return $product;
    }
}

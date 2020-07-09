<?php

namespace App\Http\Controllers\Product;

use App\Models\Group;
use Illuminate\Routing\Controller;

class DeleteProductController extends Controller
{
    public function __invoke(Group $product) {

        $product->delete();

        return response($product, 200);

    }
}

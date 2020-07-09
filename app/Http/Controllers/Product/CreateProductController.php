<?php

namespace App\Http\Controllers\Product;

use App\Models\Group;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function __invoke(Request $request) {
        $product = new Group($request->all());

        $product->saveOrFail();

        return response()
            ->json(
                $product->fresh(),
                201
            );
    }
}

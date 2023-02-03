<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\Product\ProductService;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct(private ProductService $productService)
    {
    }

    public function getAll(Request $request): JsonResponse {

        $params = $request->query();
        $products = $this->productService->getAll($params);

        return response()->json([
            'products' => $products
        ], 200);
    }
}

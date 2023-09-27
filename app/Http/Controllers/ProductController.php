<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Services\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductController extends Controller
{
    public function __construct(public ProductService $service)
    {
        //
    }

    public function list(): JsonResponse|AnonymousResourceCollection
    {
        $products = $this->service->product();

        return $products ? ProductResource::collection($products) : response()->json([], 404);
    }

    public function show($id): JsonResponse|ProductResource
    {
        $products = $this->service->product($id);

        return $products ? new ProductResource($products) : response()->json([], 404);
    }
}

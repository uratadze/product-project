<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Services\CategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategoryController extends Controller
{
    public function __construct(public CategoryService $service)
    {
        //
    }

    public function list(): JsonResponse|AnonymousResourceCollection
    {
        $categories = $this->service->category();

        return $categories ? CategoryResource::collection($categories) : response()->json([], 404);
    }

    public function show($id): CategoryResource|JsonResponse
    {
        $category = $this->service->category($id);

        return $category ? new CategoryResource($category) : response()->json([], 404);
    }
}

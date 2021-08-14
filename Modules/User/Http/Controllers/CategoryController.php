<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\Category;
use Spatie\QueryBuilder\QueryBuilder;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $categories = queryBuilder::for(Category::class)
            ->paginate(10);
        return DataResource::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     * @param CategoryRequest $request
     * @return mixed
     */
    public function store(CategoryRequest $request): DataResource
    {
        $Category = Category::create($request->validated());
        return new DataResource($Category);
    }

    /**
     * Show the specified category.
     * @param Category $category
     * @return DataResource
     */

    public function show(Category $category): DataResource
    {
        Category::whereId($category->id)->firstOrFail();
        return new DataResource($category);
    }

    /**
     * Update the specified resource in category.
     * @param CategoryUpdateRequest $request
     * @param Category $category
     * @return DataResource
     */

    public function update(CategoryUpdateRequest $request, Category $category): DataResource
    {
        $category->update($request->validated());
        return new DataResource($category);
    }

    /**
     * Remove the specified resource from category.
     * @param Category $category
     * @return DataResource
     */

    public function destroy(Category $category): DataResource
    {
        $category->delete();
        return new DataResource($category);
    }
}

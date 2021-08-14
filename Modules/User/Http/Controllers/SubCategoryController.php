<?php

namespace Modules\User\Http\Controllers;

use App\Http\Resources\DataResource;
use Doctrine\DBAL\Query\QueryBuilder;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\SubCategory;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $subcategories = queryBuilder::for(SubCategory::class)
            ->paginate(10);
        return DataResource::collection($subcategories);
    }

    /**
     * Store a newly created resource in storage.
     * @param SubCategoryRequest $request
     * @return mixed
     */
    public function store(SubCategoryRequest $request): DataResource
    {
        $subcategory = SubCategory::create($request->validated());
        return new DataResource($subcategory);
    }

    /**
     * Show the specified resource.
     * @param SubCategory $subcategory
     * @return DataResource
     */
    public function show(SubCategory $subcategory): DataResource
    {
        SubCategory::whereId($subcategory->id)->firstOrFail();
        return new DataResource($subcategory);
    }

    /**
     * Update the specified resource in storage.
     * @param SubCategoryUpdateRequest $request
     * @param SubCategory $subcategory
     * @return DataResource
     */
    public function update(SubCategoryUpdateRequest $request, SubCategory $subcategory): DataResource
    {
        $subcategory->update($request->validated());
        return new DataResource($subcategory);
    }

    /**
     * Remove the specified resource from storage.
     * @param SubCategory $subcategory
     * @return DataResource
     */
    public function destroy(SubCategory $subcategory): DataResource
    {
        SubCategory::whereId($subcategory->id)->firstOrFail();
        $subcategory->delete();
        return new DataResource($subcategory);
    }
}

<?php

namespace App\Repositories;

use App\Models\Admin\Category;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\File;
use App\Contracts\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface {
    // Category Index
    public function indexCategory() {
        $categories = config('coderz.caching', true)
            ? (Cache::has('categories') ? Cache::get('categories') : Cache::rememberForever('categories', function () {
                return Category::whereNull('category_id')->with('childrenCategories')->orderBy('position')->get();
            }))
            : Category::whereNull('category_id')->with('childrenCategories')->orderBy('position')->get();
        return compact('categories');
    }

    // Category Create
    public function createCategory() {
        $parentcategories = Category::whereNull('category_id')->with('childrenCategories')->get();
        return compact('parentcategories');
    }

    // Category Store
    public function storeCategory(CategoryRequest $request) {
        $category = Category::create($request->validated());
        $this->uploadImage($category);
    }

    // Category Show
    public function showCategory(Category $category) {
        return compact('category');
    }

    // Category Edit
    public function editCategory(Category $category) {
        $parentcategories = Category::whereNull('category_id')->with('childrenCategories')->get();
        return compact('category', 'parentcategories');
    }

    // Category Update
    public function updateCategory(CategoryRequest $request, Category $category) {
        $category->update($request->validated());
        $this->uploadImage($category);
    }

    // Category Destroy
    public function destroyCategory(Category $category) {
        deleteImage($category->image);
        $category->delete();
    }

    // UploadImage
    public function uploadImage(Category $category) {
        if (request()->has('image')) {
            $category->update([
                'image' => request()->image->store('ecommerce/category/' . validImageFolder($category->name), 'public')
            ]);
            $image = Image::make(request()->file('image')->getRealPath());
            $image->save(public_path('storage/' . $category->image));
        }
    }
}

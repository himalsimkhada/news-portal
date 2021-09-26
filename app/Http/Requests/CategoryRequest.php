<?php

namespace App\Http\Requests;

use App\Models\Admin\Category;
use Illuminate\Foundation\Http\FormRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation() {
        $this->merge([
            'code' => $this->category->code ?? rand(100000, 999999),
            'slug' => SlugService::createSlug(Category::class, 'slug', $this->name)
        ]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $id = $this->category->id ?? '';
        return [
            'code' => 'required|unique:categories,code,' . $id,
            'slug' => 'required|unique:categories,slug,' . $id,
            'category_id' => 'sometimes|numeric',
            'name' => 'required|max:50',
            'active' => 'sometimes|boolean',
            'position' => 'sometimes|numeric',
            'description' => 'nullable|max:5000',
            'image' => 'nullable|file|image|max:3000',
            'meta_name' => 'nullable|max:60',
            'meta_description' => 'nullable|max:160',
            'meta_keywords' => 'nullable'
        ];
    }
}

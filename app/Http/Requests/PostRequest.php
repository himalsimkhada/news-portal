<?php

namespace App\Http\Requests;

use App\Models\Admin\Post;
use Illuminate\Foundation\Http\FormRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'code' => $this->post->code ?? rand(100000, 999999),
            'slug' => SlugService::createSlug(Post::class, 'slug', $this->title)
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->post->id ?? '';
        return [
            'code' => 'required|unique:posts,code,' . $id,
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:posts,slug,' . $id,
            'excerpt' => 'nullable|max:255',
            'category_id' => 'required|numeric',
            'author_id' => 'required|numeric',
            'approve_by' => 'nullable|numeric',
            'body' => 'required|max:55000',
            'image' => 'nullable|file|image|max:3000',
            'status' => 'required|numeric',
            'active' => 'required|boolean',
            'featured' => 'required|boolean',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable|max:255',
            'meta_keywords' => 'nullable'
        ];
    }
}

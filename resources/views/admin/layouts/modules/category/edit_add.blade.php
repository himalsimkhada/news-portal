<div class="row">
    <div class="col-lg-8">
        <div class="card shadow-lg">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="category_id">Parent</label>
                        <div class="input-group">
                            <select name="category_id" id="category_id" class="select2" style="width: 100%">
                                <option selected disabled>Select Parent Category ... </option>
                                @isset($parentcategories)
                                    @foreach ($parentcategories as $parent_category)
                                        @if (!isset($parent_category->category_id))
                                            <option value="{{ $parent_category->id }}"
                                                {{ isset($category->id) ? ($category->id == $parent_category->id ? 'disabled' : '') : '' }}>
                                                {{ $parent_category->name }}</option>
                                            @isset($parent_category->childrenCategories)
                                                @php
                                                    $parent_loop_index = $loop->index + 1;
                                                @endphp
                                                @foreach ($parent_category->childrenCategories as $child)
                                                    @include('admin.layouts.modules.category.option_child_category', ['child' =>
                                                    $child,'parent_loop_index'
                                                    => $parent_loop_index])
                                                @endforeach

                                            @endisset
                                        @endif
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Category Name <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $category->name ?? old('name') }}" placeholder="Category Name">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-2">
                        <label for="active">Active ?</label> <br>
                        <label class="switch">
                            <input type="hidden" name="active" value="0">
                            <input type="checkbox" name="active" value="1"
                                {{ isset($category->active) ? ($category->active ? 'checked' : '') : 'checked' }}><span
                                class="switch-state"></span>
                        </label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="description">Description</label>
                        <textarea name="description" id="heavytexteditor">
                                @isset($category->description)
                                                                {!! $category->description !!}
                                @endisset
                            </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card shadow-lg">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="text-bold text-center">SEO</span>
                        <div class="mb-2">
                            <label for="meta_name">Meta Name</label>
                            <div class="input-group">
                                <input type="text" name="meta_name" id="meta_name" class="form-control"
                                    value="{{ $category->meta_name ?? old('meta_name') }}" placeholder="Meta Name">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="mb-2">
                            <label for="meta_name">Meta Description</label>
                            <div class="input-group">
                                <textarea name="meta_description" id="meta_description"
                                    class="form-control">{{ $category->meta_description ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="mb-2">
                            <label for="meta_name">Meta Keywords</label>
                            <div class="input-group">
                                <select name="meta_keywords[]" id="meta_keywords" class="meta_keywords"
                                    style="width: 100%" multiple>
                                    @isset($category->meta_keywords)
                                        @foreach ($category->meta_keywords as $keyword)
                                            <option value="{{ $keyword }}" selected>{{ $keyword }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <x-adminetic-edit-add-button :model="$category ?? null" name="Category" />
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="title">Post Title</label>
                                    <div class="input-group">
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ $post->title ?? old('title') }}" placeholder="Post Title">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="excerpt">Post Excerpt</label>
                                    <div class="input-group">
                                        <textarea name="excerpt" id="excerpt"
                                            class="excerpt form-control">{{$post->excerpt ?? old('excerpt')}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-3">
                        <label for="body">Body</label>
                        <textarea name="body" id="heavytexteditor">
                          @isset($post->body)
                              {!! $post->body !!}
                          @endisset
                          </textarea>
                    </div>
                </div>
            </div>
            <hr>
            <x-adminetic-edit-add-button :model="$post ?? null" name="Post" />
        </div>
    </div>
    <div class="col-lg-4" style="height:80vh;overflow-y:auto">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="author">Author</label>
                                    <div class="input-group">
                                        <input type="hidden" name="author_id"
                                            value="{{ $post->author_id ?? auth()->user()->id }}">
                                        <input type="text" name="author" id="author" class="form-control"
                                            value="{{ $post->author->name ?? auth()->user()->name }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="category_id">Category</label>
                                    <div class="input-group">
                                        <select name="category_id" id="category_id" class="select2" style="width: 100%">
                                            <option selected disabled>Select Parent Category ... </option>
                                            @isset($parentcategories)
                                            @foreach ($parentcategories as $parent_category)
                                            @if (!isset($parent_category->category_id))
                                            <option value="{{ $parent_category->id }}"
                                                {{isset($post->category_id) ? ($post->category_id == $parent_category->id ? 'selected' : '') : ''}}>
                                                {{ $parent_category->name }}</option>
                                            @isset($parent_category->childrenCategories)
                                            @php
                                            $parent_loop_index = $loop->index + 1;
                                            @endphp
                                            @foreach ($parent_category->childrenCategories as $child)
                                            @include('admin.layouts.modules.post.choose_child_category', ['child' =>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="image">Post Image</label> <br>
                                    <input type="file" name="image" id="image" accept="image/*"
                                        onchange="readURL(this);">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    @if (isset($post->image))
                                    <br>
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name ?? '' }}"
                                        class="img-fluid" id="post_image">
                                    @endif
                                    <img src="" id="post_image_plcaeholder" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="status">Status</label>
                                    <div class="input-group">
                                        <select name="status" id="status" class="select2 form-control">
                                            <option selected disabled>Select Status ..</option>
                                            <option value="1"
                                                {{ isset($post) ? ($post->getRawOriginal('status') == 1 ? 'selected' : '') : '' }}>
                                                Draft
                                            </option>
                                            <option value="2"
                                                {{ isset($post) ? ($post->getRawOriginal('status') == 2 ? 'selected' : '') : 'selected' }}>
                                                Pending</option>
                                            @hasRole('admin|moderator')
                                            <option value="3"
                                                {{ isset($post) ? ($post->getRawOriginal('status') == 3 ? 'selected' : '') : '' }}>
                                                Published</option>
                                            @endhasRole
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Featured ? </label> <br>
                                    <label class="switch">
                                        <input type="hidden" name="featured" value="0">
                                        <input type="checkbox" name="featured"
                                            {{isset($post->featured) ? ($post->featured ? 'checked' : '') : ''}}
                                            value="1"><span class="switch-state"></span>
                                    </label>
                                </div>
                                <br>
                                <div class="col-lg-12">
                                    <label>Active ? </label> <br>
                                    <label class="switch">
                                        <input type="hidden" name="active" value="0">
                                        <input type="checkbox" name="active"
                                            {{isset($post->active) ? ($post->active ? 'checked' : '') : 'checked'}}
                                            value="1"><span class="switch-state"></span>
                                    </label>
                                </div>
                                <br>
                                <div class="col-lg-12">
                                    <label for="tags">Tags</label> <br>
                                    <div class="input-group">
                                        <select name="tags[]" id="tags" class="tags" style="width: 100%" multiple>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="meta_title">SEO Title</label>
                                    <div class="input-group">
                                        <input type="text" name="meta_title" id="meta_title" class="form-control"
                                            value="{{ $post->meta_title ?? old('meta_title') }}"
                                            placeholder="SEO Title">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="meta_description">Meta Description</label>
                                    <div class="input-group">
                                        <textarea name="meta_description" id="meta_description"
                                            style="width:100%">{{$post->meta_description ?? ''}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Meta Keywords</label> <br>
                                    <div class="input-group">
                                        <select name="meta_keywords[]" id="tags" class="tags form-control" multiple>
                                            @isset($post->meta_keywords)
                                            @foreach ($post->meta_keywords as $meta_keyword)
                                            <option value="{{ $meta_keyword }}" selected>{{ $meta_keyword }}
                                            </option>
                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

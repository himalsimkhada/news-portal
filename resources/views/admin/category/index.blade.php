@extends('adminetic::admin.layouts.app')

@section('content')
    <x-adminetic-index-page name="category" route="category">
        {{-- ================================Card================================ --}}
        <x-slot name="content">
            <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="info-list-tab" data-bs-toggle="tab"
                        href="#info-list" role="tab" aria-controls="info-list" aria-selected="true">List</a></li>
                <li class="nav-item"><a class="nav-link" id="profile-info-tab" data-bs-toggle="tab"
                        href="#info-reorder" role="tab" aria-controls="info-reorder" aria-selected="false">Reorder Parent
                        Categories</a></li>
            </ul>
            <div class="tab-content" id="info-tabContent">
                <div class="tab-pane fade show active" id="info-list" role="tabpanel" aria-labelledby="info-list-tab">
                    <table class="table table-bordered table-hover datatable">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Children</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($categories)
                                @foreach ($categories as $category)
                                    @if (!isset($category->parent_id))
                                        <tr>
                                            <td>
                                                @if (isset($category->image))
                                                    <img src="{{ asset('storage/' . $category->image) }}"
                                                        alt="{{ $category->name }}" class="img-fluid" width="60">
                                                @else
                                                    <img src="{{ getImagePlaceholder() }}" alt="{{ $category->name }}"
                                                        class="img-fluid" width="60">
                                                @endif
                                            </td>
                                            <td>
                                                {{ $category->name }}
                                            </td>
                                            <td>
                                                @isset($category->categories)
                                                    <ul class="list-group">
                                                        @foreach ($category->categories as $child)
                                                            <li class="list-group-item">{{ $child->name }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endisset
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-{{ $category->active ? 'success' : 'danger' }}">{{ $category->active ? 'Active' : 'Inactive' }}</span>
                                            </td>
                                            <td>
                                                <x-adminetic-action :model="$category" route="category" />
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="info-reorder" role="tabpanel" aria-labelledby="profile-info-tab">
                    @livewire('admin.category.reorder-parent-category')
                </div>
            </div>
            {{-- =================================================================== --}}
        </x-slot>
    </x-adminetic-index-page>
@endsection

@section('custom_js')
    @include('admin.layouts.modules.category.scripts')
@endsection

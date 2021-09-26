@extends('adminetic::admin.layouts.app')

@section('content')
<x-adminetic-show-page name="category" route="category" :model="$category">
    <x-slot name="content">
        @if (isset($category->description))
        {!! $category->description !!}
        @else
        <div class="alert alert-danger dark alert-dismissible fade show" role="alert">No category description available.
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </x-slot>
</x-adminetic-show-page>

@endsection

@section('custom_js')
@include('admin.layouts.modules.category.scripts')
@endsection

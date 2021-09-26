@extends('adminetic::admin.layouts.app')

@section('content')
<x-adminetic-create-page name="post" route="post">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.post.edit_add')
        {{-- =================================================================== --}}
    </x-slot>
</x-adminetic-create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.post.scripts')
@endsection
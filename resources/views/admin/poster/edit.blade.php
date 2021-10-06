@extends('adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="poster" route="poster" :model="$poster">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.poster.edit_add')
        {{-- =================================================================== --}}
    </x-slot>
</x-adminetic-edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.poster.scripts')
@endsection
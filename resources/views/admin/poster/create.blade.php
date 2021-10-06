@extends('adminetic::admin.layouts.app')

@section('content')
<x-adminetic-create-page name="poster" route="poster">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.poster.edit_add')
        {{-- =================================================================== --}}
    </x-slot>
</x-adminetic-create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.poster.scripts')
@endsection
@extends('adminetic::admin.layouts.app')

@section('content')
    <x-adminetic-show-page name="poster" route="poster" :model="$poster">
        <x-slot name="content">
       
        </x-slot>
    </x-adminetic-show-page>

@endsection

@section('custom_js')
    @include('admin.layouts.modules.poster.scripts')
@endsection

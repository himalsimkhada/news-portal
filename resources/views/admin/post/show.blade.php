@extends('adminetic::admin.layouts.app')

@section('content')
    <x-adminetic-show-page name="post" route="post" :model="$post">
        <x-slot name="content">

        </x-slot>
    </x-adminetic-show-page>

@endsection

@section('custom_js')
    @include('admin.layouts.modules.post.scripts')
@endsection

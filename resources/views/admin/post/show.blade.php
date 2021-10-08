@extends('adminetic::admin.layouts.app')

@section('content')
    <x-adminetic-show-page name="post" route="post" :model="$post">
        <x-slot name="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card o-hidden">
                            <div class="bg-primary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                    <div class="media-body"><span class="m-0">Total Views</span>
                                        <h4 class="mb-0 counter">12</h4><i class="icon-bg"
                                            data-feather="database"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card o-hidden">
                            <div class="bg-secondary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                                    <div class="media-body"><span class="m-0">Total Shares</span>
                                        <h4 class="mb-0 counter">9856</h4><i class="icon-bg"
                                            data-feather="shopping-bag"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card o-hidden">
                            <div class="bg-primary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                                    <div class="media-body"><span class="m-0">Total Comments</span>
                                        <h4 class="mb-0 counter">893</h4><i class="icon-bg"
                                            data-feather="message-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 col-xl-3 col-lg-6">
                        <div class="card o-hidden">
                            <div class="bg-primary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                                    <div class="media-body"><span class="m-0">New User</span>
                                        <h4 class="mb-0 counter">45631</h4><i class="icon-bg"
                                            data-feather="user-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </x-slot>
    </x-adminetic-show-page>


@endsection

@section('custom_js')
    @include('admin.layouts.modules.post.scripts')
@endsection

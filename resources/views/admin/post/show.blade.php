@extends('adminetic::admin.layouts.app')

@section('content')
    <x-adminetic-show-page name="post" route="post" :model="$post">
        <x-slot name="content">
            <div class="container-fluid">
                <div class="card-body">
                    <ul class="nav nav-pills nav-info" id="pills-infotab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="pills-infohome-tab" data-bs-toggle="pill"
                                href="#pills-infohome" role="tab" aria-controls="pills-infohome" aria-selected="true"><i
                                    class="icofont icofont-ui-home"></i>Description</a></li>
                        <li class="nav-item"><a class="nav-link" id="pills-infoprofile-tab" data-bs-toggle="pill"
                                href="#pills-infoprofile" role="tab" aria-controls="pills-infoprofile"
                                aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Views</a></li>
                    </ul>
                    <div class="tab-content" id="pills-infotabContent">
                        <div class="tab-pane fade show active" id="pills-infohome" role="tabpanel"
                            aria-labelledby="pills-infohome-tab">
                            <p class="mb-0 m-t-30">
                                {{ strip_tags($post->body) }}
                            </p>
                        </div>
                        <div class="tab-pane fade pt-4" id="pills-infoprofile" role="tabpanel"
                            aria-labelledby="pills-infoprofile-tab">
                            <div class="row">
                                <div class="col-sm-6 col-xl-3 col-lg-6">
                                    <div class="card o-hidden">
                                        <div class="bg-primary b-r-4 card-body">
                                            <div class="media static-top-widget">
                                                <div class="align-self-center text-center"><i data-feather="database"></i>
                                                </div>
                                                <div class="media-body"><span class="m-0">Total Views</span>
                                                    <h4 class="mb-0 counter">{{ views($post)->count() }}</h4><i
                                                        class="icon-bg" data-feather="database"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3 col-lg-6">
                                    <div class="card o-hidden">
                                        <div class="bg-secondary b-r-4 card-body">
                                            <div class="media static-top-widget">
                                                <div class="align-self-center text-center"><i
                                                        data-feather="shopping-bag"></i></div>
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
                                                <div class="align-self-center text-center"><i
                                                        data-feather="message-circle"></i></div>
                                                        
                                                <div class="media-body"><span class="m-0">Total
                                                        Comments </span>
                                                        
                                                    <h4 class="mb-0 counter"><a id="color" href="{{ route('nepali.details', $post->slug)}}#disqus_thread" class="text-white">{{ $post->title }}</a></h4><i class="icon-bg"
                                                        data-feather="message-circle"></i>
                                                        <script>
                                                            console.log($('#color').html());
                                                        </script>
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
        </x-slot>
    </x-adminetic-show-page>
    <script id="dsq-count-scr" src="//newportal-1.disqus.com/count.js" async></script>


@endsection

@section('custom_js')
    @include('admin.layouts.modules.post.scripts')
@endsection

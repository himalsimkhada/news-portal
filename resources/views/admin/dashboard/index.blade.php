@extends('adminetic::admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Default </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        {{-- <h1 class="text-center">Welcome To {{ setting('site_name') }}</h1> --}}
        <div class="row">
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="calendar"></i></div>
                            <div class="media-body"><span class="m-0">Daily Views</span>
                                <h4 class="mb-0 counter">{{ $todayViews }}</h4><i class="icon-bg"
                                    data-feather="calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="calendar"></i></div>
                            <div class="media-body"><span class="m-0">Weekly Views</span>
                                <h4 class="mb-0 counter">{{ $currentWeekViews }}</h4><i class="icon-bg"
                                    data-feather="calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="calendar"></i></div>
                            <div class="media-body"><span class="m-0">Monthly Views</span>
                                <h4 class="mb-0 counter">{{ $currentMonthViews }}</h4><i class="icon-bg"
                                    data-feather="calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="calendar"></i></div>
                            <div class="media-body"><span class="m-0">Yearly Views</span>
                                <h4 class="mb-0 counter">{{ $currentYearViews }}</h4><i class="icon-bg"
                                    data-feather="calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-12 col-lg-12">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="calendar"></i></div>
                            <div class="media-body"><span class="m-0">Total Views</span>
                                <h4 class="mb-0 counter">{{ $totalViews }}</h4><i class="icon-bg"
                                    data-feather="calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bi-polar Line chart with area only</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-5 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Line chart with area</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-4 flot-chart-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('custom_js')
    @include('admin.layouts.modules.dashboard.scripts')
@endsection

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
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-xl-6 box-col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Current Year Monthly View</h5>
                        </div>
                        <div class="card-body">
                            <div id="column-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6 box-col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Current Year Monthly View</h5>
                        </div>
                        <div class="card-body apex-chart">
                            <div id="piechart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('custom_js')
    <script>
        var chartData;
        $.ajax({
            url: '{{ route("pie-chart") }}',
            dataType: 'json',
            async: false,
            success: function(response) {
                chartData = response;
            }
        });
        console.log(chartData);
    </script>
    @include('admin.layouts.modules.dashboard.scripts')
@endsection
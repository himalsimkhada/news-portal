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
              <div class="align-self-center text-center"><i data-feather="database"></i></div>
              <div class="media-body"><span class="m-0">Earnings</span>
                  <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
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
              <div class="media-body"><span class="m-0">Products</span>
                <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
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
              <div class="media-body"><span class="m-0">Messages</span>
                <h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="message-circle"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden">
          <div class="bg-primary b-r-4 card-body">
            <div class="media static-top-widget">
              <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
              <div class="media-body"><span class="m-0">New User</span>
                <h4 class="mb-0 counter">45631</h4><i class="icon-bg" data-feather="user-plus"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>Advanced SMIL Animations</h5>
            </div>
            <div class="card-body">
              <div class="ct-6 flot-chart-container"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>SVG Path animation</h5>
            </div>
            <div class="card-body">
              <div class="ct-7 flot-chart-container"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>Animating a Donut with Svg.animate</h5>
            </div>
            <div class="card-body">
              <div class="ct-8 flot-chart-container"></div>
            </div>
          </div>
        </div>
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
        <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>Bi-polar bar chart</h5>
            </div>
            <div class="card-body">
              <div class="ct-9 flot-chart-container"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>Stacked bar chart</h5>
            </div>
            <div class="card-body">
              <div class="ct-10 flot-chart-container"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>Horizontal bar chart</h5>
            </div>
            <div class="card-body">
              <div class="ct-11 flot-chart-container"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>Extreme responsive configuration</h5>
            </div>
            <div class="card-body">
              <div class="ct-12 flot-chart-container"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>Simple line chart</h5>
            </div>
            <div class="card-body">
              <div class="ct-1 flot-chart-container"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>Holes in data</h5>
            </div>
            <div class="card-body">
              <div class="ct-2 flot-chart-container"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>Filled holes in data</h5>
            </div>
            <div class="card-body">
              <div class="ct-3 flot-chart-container"></div>
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
    @include('admin.layouts.modules.dashboard.scripts')
@endsection

@extends('nepali.layouts.app')

@section('content')
    <div class="container">

        <div class="nepaliCalendar">
            <!-- Start of nepali calendar widget -->
            <script type="text/javascript">
                var nc_width = 'responsive';
                var nc_height = 650;
                var nc_api_id = "4011z3k371";
            </script>
            <script type="text/javascript" src="https://www.ashesh.com.np/nepali-calendar/js/ncf.js?v=5"></script><div id="ncwidgetlink">Powered by © <a href="https://www.ashesh.com.np/nepali-calendar/"
                    id="nclink" title="Nepali calendar" target="_blank">nepali calendar</a></div>
            <!-- End of nepali calendar widget -->
        </div>

    </div>
@endsection

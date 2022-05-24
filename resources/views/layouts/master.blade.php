<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- Favicons -->
        <link href="{{asset('assets/images/weblogo.png')}}" rel="icon">
        <link href="{{asset('assets/images/web1logo.png')}}" rel="apple-touch-icon">
        <!-- Bootstrap core CSS -->
        <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <title>App Name - @yield('title')</title>
        @stack('meta')
        <title>@yield('title')</title>
        @stack('styles')
        @stack('scripts')
    </head>
    <body>
        @section('sidebar')
        @include('layouts.header') 
        @include('layouts.sidebar') 
                
        @show
        @yield('content')


    @push('scripts')
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
        <script class="include" type="text/javascript" src="{{asset('assets/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
        <script src="{{asset('assets/lib/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <!--common script for all pages-->
        <script src="{{asset('assets/lib/common-scripts.js')}}"></script>
        <!--script for this page-->
        <script src="{{asset('assets/lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/bootstrap-daterangepicker/date.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/bootstrap-daterangepicker/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
        <script src="{{asset('assets/lib/advanced-form-components.js')}}"></script>
    @endpush       
    </body>
</html>
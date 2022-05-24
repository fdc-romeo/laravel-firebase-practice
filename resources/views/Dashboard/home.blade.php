@extends('layouts.master')
 
@section('title', 'Dashboard')
@push('styles')
    <!--external css-->
    <link href="{{asset('assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-daterangepicker/daterangepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-timepicker/compiled/timepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-datetimepicker/css/datetimepicker.css')}}" />
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css1/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css1/style-responsive.css')}}" rel="stylesheet">

@endpush    
@section('content')
     <!--main content start-->
     <form class="form-horizontal style-form" method="post"enctype="multipart/form-data">
        <section id="main-content">
            <section class="wrapper">
                <br>
                <br>
                <h3><i class="fa fa-angle-right"></i>Add Patient</h3>
            <button type="submit" name="save"class="btn btn-theme" style="float: right;margin-top: -20px;margin-bottom: 10px"><i class="fa fa-check"></i> Save</button>
            <br>
            </section>
        </section>
    </form>  
     <!--main content end-->

@endsection
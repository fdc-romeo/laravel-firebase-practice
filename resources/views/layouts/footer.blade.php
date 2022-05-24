@extends('layouts.master')
@push('scripts')
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="{{asset('assets/lib/jquery.backstretch.min.js')}}"></script>
@endpush
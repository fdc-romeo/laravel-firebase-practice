@extends('layouts.master')
 
@section('title', 'Page Title')
@push('styles')
    <!--external css-->
    <link href="{{asset('assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css1/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css1/style-responsive.css')}}" rel="stylesheet">

@endpush
@section('content')
  <div id="login-page">
    <div class="container">
       <center><img src="{{asset('assets/images/w1.png')}}" style="height: 160px; width: 370px;"></center>
      <form class="form-login" action="{{url('login')}}" method="post" style="margin-top: 10px">
        <h2 class="form-login-heading">Log in now</h2>
        <p>{{ !empty($mess) ? $mess : "" }}</p>
        <div class="login-wrap">
          <input type="email" class="form-control" name="email"placeholder="Username"  required>
          <br>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <br> 
          <button class="btn btn-theme btn-block" name="login" type="submit"><i class="fa fa-lock"></i> LOG IN</button>
          <hr>
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="register.php">
              Create an account
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email_reset" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div> 
  @push('scripts')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{asset('assets/lib/jquery.backstretch.min.js')}}"></script>
  @endpush
    <script>
    $.backstretch("{{asset('assets/images/123.jpg')}}", {
    speed: 500
    });
    </script>
@endsection
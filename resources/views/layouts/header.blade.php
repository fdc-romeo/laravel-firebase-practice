<!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
<!--header start-->
@if(isset($userInfo['displayName']) && !empty($userInfo['displayName'])  )
<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <img src="{{asset('assets/images/web1logo.png')}}" style="width: 150px; height: 50px; float: left; margin-top:5px ">
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
        <li style="padding: 15px"> <h5 class="centered" style="color: white">{{!empty($userInfo['displayName']) ? $userInfo['displayName'] : "" }}</h5> </li>
        <input type="hidden" value=""  name="docfullname">
        <li style="padding: 10px 10px 0 5px"><p class="centered"><a href="#"><img src="{{asset('assets/images/user.png')}}" class="img-circle" width="40"></a></p></li>
            <li><a class="logout" href="{{url('logout')}}">Logout</a></li>
        </ul>
    </div>
</header>
@endif
<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->

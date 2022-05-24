@if(isset($userInfo['displayName']) && !empty($userInfo['displayName'])  )
   <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
                <br>
                <br>
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="mt">
                    <a class="active" href="dashboard.php">
                        <i class="fa fa-plus"></i>
                        <span><b>Add Patient</b></span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="listpatients.php">
                        <i class="fa fa-vcard"></i>
                        <span><b>List of Patient</b></span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a  href="patientsschedule.php">
                        <i class="fa fa-calendar-check-o"></i>
                        <span><b>Patient Schedule</b></span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="listerequestreservation.php">
                        <i class="fa fa fa-bell-o"></i>  
                        <span><b>Request Schedule</b></span>
                    </a>
                </li>
            </ul>
        <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    @endif
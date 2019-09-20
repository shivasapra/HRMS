<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HRMS | FORBCORP</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('app/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('app/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('app/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/ui.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/lightbox.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/pignose.calendar.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('app/vendors/css/jquery.dataTables.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('app/images/favicon.png')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="">
                    <img src="{{asset('app/images/forbcorp.png')}}" alt="FORBCORP Logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="">
                    <img src="{{asset('app/images/forbcorp.png')}}" alt="FORBCORP Logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-file-document-box"></i>
                            <span class="count">7</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <div class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                                </p>
                                <span class="badge badge-info badge-pill float-right">View all</span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('app/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                                        <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('app/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                                        <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('app/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                                        <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <span class="count">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                                </p>
                                <span class="badge badge-pill badge-warning float-right">View all</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-alert-circle-outline mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                                    <p class="font-weight-light small-text">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-comment-text-outline mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                                    <p class="font-weight-light small-text">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-email-outline mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                                    <p class="font-weight-light small-text">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <span class="profile-text">{{Auth::user()->name}}</span>
                            <img class="img-xs rounded-circle" src="{{asset('app/images/faces/face1.jpg')}}" alt="Profile image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown pb-0" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item pt-3 pb-3" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <h4 class="text-center pt-4 pb-4 pl-2 pr-2 mb-0 text-white">Folks On Royal Break</h4>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">
                            <i class="menu-icon mdi mdi-home"></i>
                            <span class="menu-title">Home</span>
                        </a>
                    </li>
                    @if(Auth::user()->admin)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('employee.add')}}">
                                <i class="menu-icon mdi mdi-account-plus"></i>
                                <span class="menu-title">Add Employee</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('employee.index')}}">
                                <i class="menu-icon mdi mdi-account-multiple"></i>
                                <span class="menu-title">View Employees</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('leave.applications')}}">
                                <i class="menu-icon mdi mdi-file-document-box"></i>
                                <span class="menu-title">Leave Applications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('attendance')}}">
                                <i class="menu-icon mdi mdi-table"></i>
                                <span class="menu-title">Attendance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('reports')}}">
                                <i class="menu-icon mdi mdi-chart-line"></i>
                                <span class="menu-title">Reports</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('goals')}}">
                                <i class="menu-icon mdi mdi-trophy-variant"></i>
                                <span class="menu-title">Goals</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('holidays')}}">
                                <i class="menu-icon mdi mdi-calendar-check"></i>
                                <span class="menu-title">Holidays</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('letters')}}">
                                <i class="menu-icon mdi mdi-file-document"></i>
                                <span class="menu-title">Official Letters</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('settings')}}">
                                <i class="menu-icon mdi mdi-settings"></i>
                                <span class="menu-title">Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('feedback')}}">
                                <i class="menu-icon mdi mdi-account"></i>
                                <span class="menu-title">Employee Feedbacks</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('organisations.general.information')}}">
                                <i class="menu-icon mdi mdi-home-modern"></i>
                                <span class="menu-title">Organization</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('profile')}}">
                                <i class="menu-icon mdi mdi-account"></i>
                                <span class="menu-title">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('employee.details',Auth::user()->employee->id)}}">
                                <i class="menu-icon mdi mdi-account-multiple"></i>
                                <span class="menu-title">View Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('leave.applications')}}">
                                <i class="menu-icon mdi mdi-file-document-box"></i>
                                <span class="menu-title">Leave Applications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('attendance')}}">
                                <i class="menu-icon mdi mdi-table"></i>
                                <span class="menu-title">Attendance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('reports')}}">
                                <i class="menu-icon mdi mdi-chart-line"></i>
                                <span class="menu-title">Reports</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('goals')}}">
                                <i class="menu-icon mdi mdi-trophy-variant"></i>
                                <span class="menu-title">Goals</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('letters')}}">
                                <i class="menu-icon mdi mdi-file-document"></i>
                                <span class="menu-title">Official Letters</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('feedback')}}">
                                <i class="menu-icon mdi mdi-account"></i>
                                <span class="menu-title">Feedback</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('organisations.general.information')}}">
                                <i class="menu-icon mdi mdi-home-modern"></i>
                                <span class="menu-title">Organization</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>

    <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
            <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                    <span class="text-gray d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y');?>
                    <a href="https://www.forbcorp.com/" target="_blank"><b>FORBCORP</b></a>. All Rights Reserved.</span>
            </div>
        </footer>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script src="{{asset('app/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('app/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('app/js/off-canvas.js')}}"></script>
    <script src="{{asset('app/js/misc.js')}}"></script>
    <script src="{{asset('app/js/chart.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('app/js/dashboard.js')}}"></script>
    <script src="{{asset('app/js/lightbox.min.js')}}"></script>
    <script src="{{asset('app/js/pignose.calendar.full.min.js')}}"></script>
    <script src="{{asset('app/vendors/js/jquery.dataTables.js')}}"></script>


    <!-- End custom js for this page-->

    <script>
        $(document).ready(function() {
            $('#my_table').DataTable();
        } );
    </script>

    
    <script>
        $(function() {
            $('.calendar').pignoseCalendar({
                theme: 'blue' // light, dark, blue
            });
        });
    </script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <!-- Compiled and minified CSS -->
 
     <!-- Compiled and minified JavaScript -->
     <script>
        
         setTimeout(function() {
             @if(session('notify'))
             swal({
                 title: '{{session('notify_title')}}',
                 text: '{{session('notify_text')}}',
                 icon: '{{session('notify_type')}}'
             });
             @endif
         }, 200);
     </script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
     <script src="http://malsup.github.com/jquery.form.js"></script> 
     
     <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
     <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
     <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
    @yield('scripts')
    {{ forgetNotification() }}
</body>
</html>
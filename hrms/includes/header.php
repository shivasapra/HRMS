<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HRMS | Him Soft</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="./vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" type="text/css" href="./css/ui.css"/>
    <link rel="stylesheet" type="text/css" href="./css/lightbox.min.css"/>
    <link rel="stylesheet" type="text/css" href="./css/pignose.calendar.min.css"/>
    <link rel="stylesheet" type="text/css" href="./vendors/css/jquery.dataTables.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="./images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html">
                <img src="./images/logo.png" alt="Himsoft Logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.php">
                <img src="./images/logo.png" alt="Himsoft Logo" />
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
                                <img src="../images/faces/face4.jpg" alt="image" class="profile-pic">
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
                                <img src="../images/faces/face2.jpg" alt="image" class="profile-pic">
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
                                <img src="../images/faces/face3.jpg" alt="image" class="profile-pic">
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
                        <span class="profile-text">Richard V.Welsh !</span>
                        <img class="img-xs rounded-circle" src="./images/faces/face1.jpg" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown pb-0" aria-labelledby="UserDropdown">
                        <a href="login.php" class="dropdown-item pt-3 pb-3">Sign Out</a>
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
                    <a class="nav-link" href="index.php">
                        <i class="menu-icon mdi mdi-home"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add-employee.php">
                        <i class="menu-icon mdi mdi-account-plus"></i>
                        <span class="menu-title">Add Employee</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view-employee.php">
                        <i class="menu-icon mdi mdi-account-multiple"></i>
                        <span class="menu-title">View Employees</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="leave-applications.php">
                        <i class="menu-icon mdi mdi-file-document-box"></i>
                        <span class="menu-title">Leave Applications</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="attendance.php">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Attendance</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reports.php">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Reports</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="goals.php">
                        <i class="menu-icon mdi mdi-trophy-variant"></i>
                        <span class="menu-title">Goals</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="holidays.php">
                        <i class="menu-icon mdi mdi-calendar-check"></i>
                        <span class="menu-title">Holidays</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="official-letters.php">
                        <i class="menu-icon mdi mdi-file-document"></i>
                        <span class="menu-title">Official Letters</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                        <i class="menu-icon mdi mdi-account"></i>
                        <span class="menu-title">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="settings.php">
                        <i class="menu-icon mdi mdi-settings"></i>
                        <span class="menu-title">Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="organization.php">
                        <i class="menu-icon mdi mdi-home-modern"></i>
                        <span class="menu-title">Organization</span>
                    </a>
                </li>

<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="../pages/forms/basic_elements.html">-->
<!--                        <i class="menu-icon mdi mdi-backup-restore"></i>-->
<!--                        <span class="menu-title">Form elements</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="../pages/charts/chartjs.html">-->
<!--                        <i class="menu-icon mdi mdi-chart-line"></i>-->
<!--                        <span class="menu-title">Charts</span>-->
<!--                    </a>-->
<!--                </li>-->
<!---->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="../pages/icons/font-awesome.html">-->
<!--                        <i class="menu-icon mdi mdi-sticker"></i>-->
<!--                        <span class="menu-title">Icons</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">-->
<!--                        <i class="menu-icon mdi mdi-restart"></i>-->
<!--                        <span class="menu-title">User Pages</span>-->
<!--                        <i class="menu-arrow"></i>-->
<!--                    </a>-->
<!--                    <div class="collapse" id="auth">-->
<!--                        <ul class="nav flex-column sub-menu">-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="../pages/samples/blank-page.html"> Blank Page </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="../pages/samples/login.html"> Login </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="../pages/samples/register.html"> Register </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="../pages/samples/error-404.html"> 404 </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a class="nav-link" href="../pages/samples/error-500.html"> 500 </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->
            </ul>
        </nav>

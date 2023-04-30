
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Donation Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../../admin/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../../admin/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="../../admin/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="../../admin/images/favicon.ico" />
    </head>
    <body>
        <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="/dashboard"><img src="../../admin/images/logo.png" alt="logo" style="height: 50px" width="120px" /></a>
            <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="../../admin/images/logo-mini.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                    <i class="input-group-text border-0 mdi mdi-magnify"></i>
                    </div>
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                </div>
                </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                        <img src="../../admin/images/faces/face1.jpg" alt="image">
                        <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{ auth()->user()->name }}</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                        <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                    <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="count-symbol bg-warning"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="../../admin/images/faces/face4.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                        <p class="text-gray mb-0"> 1 Minutes ago </p>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="../../admin/images/faces/face2.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                        <p class="text-gray mb-0"> 15 Minutes ago </p>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="../../admin/images/faces/face3.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                        <p class="text-gray mb-0"> 18 Minutes ago </p>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count-symbol bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                        <i class="mdi mdi-calendar"></i>
                        </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                        <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-warning">
                        <i class="mdi mdi-settings"></i>
                        </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                        <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                        <i class="mdi mdi-link-variant"></i>
                        </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                        <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                    </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                </div>
                </li>
                <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-power"></i>
                </a>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-format-line-spacing"></i>
                </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                    <img src="../../admin/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
                    <span class="text-secondary text-small">Project Manager</span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-title">Master</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-harddisk menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="/dashboard/user">User</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/dashboard/kategoriprogram">Kategori Program</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/dashboard/program">Program Donasi</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Transaksi</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-coin menu-icon"></i>
                    </a>
                    <div class="collapse" id="general-pages">
                        <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                @yield('container')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                <h5 class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © <a href="/">DoNation.com</a> 2023</h5>
                </div>
            </footer>
            <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="{{ asset('../../admin/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('../../admin/js/off-canvas.js') }}"></script>
        <script src="{{ asset('../../admin/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('../../admin/js/misc.js') }}"></script>
        <script src="{{ asset('../../assets/js/file-upload.js') }}"></script>

        <script src="{{ asset('../../assets/js/settings.js') }}"></script>
        <script src="{{ asset('../../assets/js/todolist.js') }}"></script>
        <script src="{{ asset('https://cdn.amcharts.com/lib/5/themes/Animated.js') }}"></script>
        <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-2.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7-beta.23/jquery.inputmask.min.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
    </body>
</html>

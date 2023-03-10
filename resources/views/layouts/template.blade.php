<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIGMA</title>
    <!-- core:css -->
    <link rel="stylesheet" href="/SIGMA/public/assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page-->
    <link rel="stylesheet" href="/SIGMA/public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/SIGMA/public/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="/SIGMA/public/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/SIGMA/public/assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="/SIGMA/public/assets/images/favicon.png" />

    <!-- End layout styles -->
    <link rel="shortcut icon" href="/SIGMA/public/assets/images/favicon.png" />
    <link rel="stylesheet" href="/SIGMA/public/assets/vendors/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" href="/SIGMA/public/assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="/SIGMA/public/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css">
	<link rel="stylesheet" href="/SIGMA/public/assets/vendors/dropzone/dropzone.min.css">
	<link rel="stylesheet" href="/SIGMA/public/assets/vendors/dropify/dist/dropify.min.css">
	<link rel="stylesheet" href="/SIGMA/public/assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="/SIGMA/public/assets/vendors/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/SIGMA/public/assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css">
<!-- core:css -->
<!-- endinject -->
<!-- plugin css for this page -->
<link rel="stylesheet" href="/SIGMA/public/assets/vendors/select2/select2.min.css">
<link rel="stylesheet" href="/SIGMA/public/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css">
<link rel="stylesheet" href="/SIGMA/public/assets/vendors/dropzone/dropzone.min.css">
<link rel="stylesheet" href="/SIGMA/public/assets/vendors/dropify/dist/dropify.min.css">
<link rel="stylesheet" href="/SIGMA/public/assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="/SIGMA/public/assets/vendors/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/SIGMA/public/assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="/SIGMA/public/assets/css/demo_1/style.css">
<!-- End layout styles -->
<link rel="shortcut icon" href="/SIGMA/public/assets/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="/" class="sidebar-brand">
                    FOODSERVICE
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">


                <ul class="nav">
                    <li class="nav-item nav-category">Proveedores</li>
                    <li class="nav-item">
                        <a href="/SIGMA/public/agenda" class="nav-link">
                            <i class="link-icon" data-feather="bookmark"></i>
                            <span class="link-title">Agenda</span>
                        </a>
                    </li>

                    <li class="nav-item nav-category">TITULO 1</li>
                    <li class="nav-item">
                        <a href="/SIGMA/public/deposito" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dep??sito</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/SIGMA/public/movimientos" class="nav-link">
                            <i class="link-icon" data-feather="list"></i>
                            <span class="link-title">Movimientos</span>
                        </a>
                    </li>

                    <li class="nav-item nav-category">TITULO 2</li>
                    <li class="nav-item">
                        <a href="/SIGMA/public/operaciones" class="nav-link">
                            <i class="link-icon" data-feather="server"></i>
                            <span class="link-title">Operaciones</span>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="dashboard-one.html#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i data-feather="search"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="dashboard-one.html#" id="profileDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/faces/face1.jpg" alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="assets/images/faces/face1.jpg" alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">{{ Auth::user()->name }}</p>
                                        <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="pages/general/profile.html" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="edit"></i>
                                                <span>Edit Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="repeat"></i>
                                                <span>Switch User</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            {{--                                             
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a> --}}

                                            <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">

                @yield('content')


            </div>

            <!-- partial:partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright ?? 2023 <a
                        href="http://www.foodservice.com.ar/" target="_blank">FoodService S.A.</a> All rights reserved
                </p>

            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="/SIGMA/public/assets/vendors/core/core.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="/SIGMA/public/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="/SIGMA/public/assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="/SIGMA/public/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="/SIGMA/public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/SIGMA/public/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/SIGMA/public/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/SIGMA/public/assets/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script src="/SIGMA/public/assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
	<script src="/SIGMA/public/assets/vendors/inputmask/jquery.inputmask.min.js"></script>
	<script src="/SIGMA/public/assets/vendors/select2/select2.min.js"></script>
	<script src="/SIGMA/public/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
	<script src="/SIGMA/public/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>
	<script src="/SIGMA/public/assets/vendors/dropzone/dropzone.min.js"></script>
	<script src="/SIGMA/public/assets/vendors/dropify/dist/dropify.min.js"></script>
	<script src="/SIGMA/public/assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
	<script src="/SIGMA/public/assets/vendors/moment/moment.min.js"></script>
	<script src="/SIGMA/public/assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="/SIGMA/public/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="/SIGMA/public/assets/js/template.js"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <script src="/SIGMA/public/assets/js/dashboard.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/SIGMA/public/assets/js/wizard.js"></script>   
    <script src="/SIGMA/public/assets/vendors/jquery-steps/jquery.steps.min.js"></script>
    <script src="/SIGMA/public/assets/js/form-validation.js"></script>
	<script src="/SIGMA/public/assets/js/bootstrap-maxlength.js"></script>
	<script src="/SIGMA/public/assets/js/inputmask.js"></script>
	<script src="/SIGMA/public/assets/js/select2.js"></script>
	<script src="/SIGMA/public/assets/js/typeahead.js"></script>
	<script src="/SIGMA/public/assets/js/tags-input.js"></script>
	<script src="/SIGMA/public/assets/js/dropzone.js"></script>
	<script src="/SIGMA/public/assets/js/dropify.js"></script>
	<script src="/SIGMA/public/assets/js/bootstrap-colorpicker.js"></script>
	<script src="/SIGMA/public/assets/js/datepicker.js"></script>
	<script src="/SIGMA/public/assets/js/timepicker.js"></script>
    <!-- end custom js for this page -->
    

</body>

</html>

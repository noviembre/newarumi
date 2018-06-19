<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Panel de Control</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/plugins/themify/css/themify.css') }}" rel="stylesheet" type="text/css">

    <!-- Angular Tooltip Css -->
    <link href="{{ asset('assets/plugins/angular-tooltip/angular-tooltips.css') }}" rel="stylesheet">

    <!-- Page level plugin CSS -->
    <link href="{{ asset('assets/dist/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dist/css/glovia.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/glovia-responsive.min.css') }}" rel="stylesheet">

    <!-- Custom styles for Color -->
    <link id="jssDefault" rel="stylesheet" href="{{ asset('assets/dist/css/skins/default.css') }}">

    <!-- Notification css -->
    <link href="{{ asset('assets/toastr/css/toastr.min.css') }}" rel="stylesheet">

    @yield('styles')

</head>

<body class="fixed-nav sticky-footer sidenav-toggled" id="page-top">

<!-- ===============================
    Navigation Start
====================================-->
<nav class="navbar navbar-expand-lg bb-1 navbar-light br-full-dark bg-dark fixed-top" id="mainNav">

    <!-- Start Header -->
    <header class="header-logo bg-dark bb-1 br-1 br-light-dark">
        <a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler"><i class="ti-align-left"></i></a>
        <a class="gredient-cl navbar-brand" href="#">Panel</a>
    </header>
    <!-- End Header -->

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-left"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- =============== Start Side Menu ============== -->
        <div class="navbar-side">
            <ul class="navbar-nav navbar-sidenav bg-light-dark" id="exampleAccordion">



                <!-- Start Home -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ti ti-home"></i>
                        <span class="nav-link-text">Inicio</span>
                    </a>
                </li>
                <!-- End Home -->



                <!-- Start Post -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Post">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#post" data-parent="#exampleAccordion">
                        <i class="ti i-cl-5 ti ti-desktop"></i>
                        <span class="nav-link-text">Post</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="post">

                        <li><a href="{{ route('posts') }}">Todos</a></li>
                        <li><a href="{{ route('post.create') }}">Crear Post</a></li>
                        <li><a href="{{ route('posts.trashed') }}">Post Inactivos</a></li>

                    </ul>

                </li>
                <!-- End Post -->




                <!-- Start Tags -->

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Listar Etiquetas">
                    <a class="nav-link" href="{{ route('tags') }}">
                        <i class="ti  i-cl-6 ti-list"></i>
                        <span class="nav-link-text">Listar Etiquetas</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Crear Etiqueta">
                    <a class="nav-link" href="{{ route('tag.create') }}">
                        <i class="ti i-cl-6 ti-file"></i>
                        <span class="nav-link-text">Nueva Etiqueta</span>
                    </a>
                </li>
                <!-- End Tags -->





                <!-- Start Categoria -->

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Listar Categoria">
                    <a class="nav-link" href="{{ route('categories') }}">
                        <i class="ti  i-cl-10 ti-list"></i>
                        <span class="nav-link-text">Listar Categoria</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Crear Categoria">
                    <a class="nav-link" href="{{ route('category.create') }}">
                        <i class="ti i-cl-10 ti-file"></i>
                        <span class="nav-link-text">Nueva Categoria</span>
                    </a>
                </li>
                <!-- End Categoria -->



                <!-- Start Registros -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registros">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#registros" data-parent="#exampleAccordion">
                        <i class="ti i-cl-9 ti-bar-chart"></i>
                        <span class="nav-link-text">Registros </span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="registros">

                        <li><a href="#">Modificaciones</a></li>
                        <li><a href="#">Registros</a></li>



                    </ul>
                </li>
                <!-- End Registros -->



            </ul>
        </div>
        <!-- =============== End Side Menu ============== -->





        <!-- =============== Buscador Bar ============== -->
        <ul class="navbar-nav ml-left">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">
							  <i class="ti-search"></i>
							</button>
						</span>
                        <input class="form-control" type="text" placeholder="Buscar">
                    </div>
                </form>
            </li>
        </ul>
        <!-- =============== End Buscador Bar ============== -->








        <!-- =============== Header Rightside Menu ============== -->
        <ul class="navbar-nav ml-auto">

            <!-- Messages -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="gredient-cl ti-email"></i>
                    <span class="a-nav__link-badge a-badge a-badge--pink">3</span>
                    <span class="hidden-lg hidden-md mrg-l-10">New Notification</span>
                </a>
                <div class="dropdown-menu animated flipInX" aria-labelledby="messagesDropdown">
                    <div class="dropdown-header text-center pink-bg">
                        <span class="a-dropdown__header-title">3 New</span>
                        <span class="a-dropdown__header-subtitle">User Messages</span>
                    </div>
                    <div class="ground-list ground-list-hove" id="message-box">





                        {{--<div class="ground ground-single-list">--}}
                            {{--<a href="#">--}}
                                {{--<img class="ground-avatar" src="assets/dist/img/user-5.jpg" alt="...">--}}
                                {{--<span class="profile-status bg-online pull-right"></span>--}}
                            {{--</a>--}}

                            {{--<div class="ground-content">--}}
                                {{--<h6><a href="#">Maryam Amiri</a></h6>--}}
                                {{--<small class="text-fade">Co-Founder</small>--}}
                            {{--</div>--}}

                            {{--<div class="ground-right">--}}
                                {{--<span class="small">Online</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <a class="dropdown-item view-all" href="#">View all Messages</a>
                </div>
            </li>
            <!-- End Messages -->

            <!-- Notification -->
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="gredient-cl ti-bell"></i>
                    <span class="a-nav__link-badge a-badge a-badge--accent a-animate-blink">6</span>
                    <span class="hidden-lg hidden-md mrg-l-10">New Notification</span>
                </a>

                <div class="dropdown-menu animated flipInX" aria-labelledby="alertsDropdown">
                    <div class="dropdown-header text-center accent-bg">
                        <span class="a-dropdown__header-title">6 New</span>
                        <span class="a-dropdown__header-subtitle">User Notifications</span>
                    </div>

                    <div class="ground-list ground-list-hove" id="notification-box">
                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-success"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Check New Admin Dashboard..</small>
                                <span class="small">Just Now</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-danger"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">You can Customize..</small>
                                <span class="small">02 Min Ago</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-info"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Need Responsive Business Tem...</small>
                                <span class="small">10 Min Ago</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-warning"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Next Meeting on Tuesday..</small>
                                <span class="small">15 Min Ago</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-purple"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">You can Change Your Pass..</small>
                                <span class="small">18 Min Ago</span>
                            </div>
                        </div>
                    </div>
                    <a class="dropdown-item view-all" href="#">View all Notifications</a>
                </div>
            </li>
            <!-- End Notification -->

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('assets/dist/img/git_user.png')}} " alt="user-img" width="36" class="img-circle">
                    <b class="f-size-17">{{ Auth::user()->name }}</b>
                </a>

                <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">
                    <li class="dropdown-header green-bg">
                        <div class="header-user-pic">
                            <img src="{{asset('assets/dist/img/git_user.png')}}" alt="user-img" width="36" class="img-circle">
                        </div>
                        <div class="header-user-det">
                            <span class="a-dropdown__header-title">{{ Auth::user()->name }}</span>
                            <span class="a-dropdown__header-subtitle">Admin / Ui Expert</span>
                        </div>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('user.profile') }}"><i class="ti-user"></i> Mi Perfil</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a></li>




                    @if(Auth::user()->admin)
                        <!-- si no eres admin no podras ver este link -->
                    <li><a class="dropdown-item" href="{{ route('users') }}">
                            <i class="ti-user"></i> Usuarios</a></li>
                    @endif



                    <li><a class="dropdown-item" href="#"><i class="ti-settings"></i> Ajustes</a></li>





                    <li><a class="dropdown-item" href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Salir</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>




                </ul>
            </li>
        </ul>
        <!-- =============== End Header Rightside Menu ============== -->

    </div>
</nav>
<!-- =====================================================
                    End Navigations
======================================================= -->







<div class="content-wrapper">
    <div class="container-fluid">




        @yield('content')





    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small class="font-15">Copyright © Artemis Made With
                    <i class="fa fa-cube cl-success"></i> In Peru
                </small>
            </div>
        </div>
    </footer>




    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded cl-white gredient-bg" href="#page-top">
        <i class="ti-angle-double-up"></i>
    </a>




    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>



    <!-- Notifications  -->
    <script src="{{ asset('assets/toastr/js/toastr.min.js') }}"></script>

    <script>
        @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}")

        @endif

        @if(Session::has('info'))

        toastr.info("{{ Session::get('info') }}")

        @endif

    </script>





    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/plugins/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Slick Slider Js -->
    <script src="{{ asset('assets/plugins/slick-slider/slick.js') }}"></script>

    <!-- Slim Scroll -->
    <script src="{{ asset('assets/plugins/slim-scroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Angular Tooltip -->
    <script src="{{ asset('assets/plugins/angular-tooltip/angular.js') }}"></script>
    <script src="{{ asset('assets/plugins/angular-tooltip/angular-tooltips.js') }}"></script>
    <script src="{{ asset('assets/plugins/angular-tooltip/index.js') }}"></script>


    <!-- Custom scripts for all pages -->
    <script src="{{ asset('assets/dist/js/glovia.js') }}"></script>


    @yield('scripts')



    <script>
        $('.dropdown-toggle').dropdown()
    </script>

</div>
<!-- Wrapper -->

</body>

</html>

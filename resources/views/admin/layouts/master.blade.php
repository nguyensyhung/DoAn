<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Document title -->
        <title>Dashboard | Nsh_Dev</title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="{{ asset('admin/img/favicons/apple-touch-icon.png') }}" />
        <link rel="icon" href="{{ asset('admin/img/favicons/favicon.ico') }}" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('admin/js/plugins/slick/slick.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/js/plugins/slick/slick-theme.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/js/plugins/bootstrap-datepicker/jquery.datetimepicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/toastr.min.css') }}" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="{{ asset('admin/css/font-awesome.css') }}" />
        <link rel="stylesheet" id="css-ionicons" href="{{ asset('admin/css/ionicons.css') }}" />
        <link rel="stylesheet" id="css-bootstrap" href="{{ asset('admin/css/bootstrap.css') }}" />
        <link rel="stylesheet" id="css-app" href="{{ asset('admin/css/app.css') }}" />
        <link rel="stylesheet" id="css-app-custom" href="{{ asset('admin/css/app-custom.css') }}" />
        

        <!-- End Stylesheets -->
    </head>

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Drawer -->
                @include('admin.layouts.partials.aside')
                <!-- End drawer -->

                <!-- Header -->
                @include('admin.layouts.partials.header')
                <!-- End header -->

                @yield('content')

            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps card -->
                    <div class="card m-b-0">
                        <div class="card-header bg-app bg-inverse">
                            <h4>Apps</h4>
                            <ul class="card-actions">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                                        <i class="ion-speedometer fa-4x"></i>
                                        <p>Admin</p>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                                        <i class="ion-laptop fa-4x"></i>
                                        <p>Frontend</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- End Apps card -->
                </div>
            </div>
        </div>
        <!-- End Apps Modal -->

        <div class="app-ui-mask-modal"></div>

        @yield('javascript')
        <script>
            $(document).ready(function () {
                $(document).on('click', '.logout', function () {
                    event.preventDefault();
                    $('form[name=logout]').submit();
                    console.log('working');
                });
            });
        </script>
        <script src="{{asset('admin/js/toastr.min.js')}}"></script>
        <script> 
            @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")

            @endif
        </script>
    </body>
</html>
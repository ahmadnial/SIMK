<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIM Klinik</title>

    <link rel="shortcut icon" href="{{ asset ('asset/dashboard/dist/img/logoNR.png') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/dist/css/adminlte.min.css') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('asset/css/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset ('asset/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('asset/css/genQR.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{ asset ('asset/js/bootstrap3-typeahead.min.js') }}">
    </script>
    <script src="{{ asset ('asset/js/typeahead.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>


    {{--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    --}}
    @livewireStyles

</head>

<!-- Light Mode Body -->

<body class="hold-transition sidebar-mini">
    @include('sweetalert::alert')

    <!-- Dark Mode Body -->
    <!-- <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"> -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    {{-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a> --}}
                <li class="nav-item nav-profile dropdown">
                    <a class="img-circle user-panel d-flex" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="{{ asset ('asset/dashboard/dist/img/face23.jpg') }}"
                            class="img-circle elevation-2 alt=" image" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a href="{{route('logout')}}" class="dropdown-item">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="{{ asset ('asset/dashboard/dist/img/logo.svg') }}" class="brand-image elevation-0"
                    style="opacity: .9">
                <span class="brand-text font-weight-light">&nbsp;</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset ('asset/dashboard/dist/img/face23.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <i class="d-block text-white">Hi, {{ auth()->user()->name}}</i>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-address-book"></i>
                                <p>
                                    Registrasi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('data-sosial') }}" class="nav-link">
                                        <i class="fas fa-feather-alt nav-icon"></i>

                                        <p>Data Sosial</p>

                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('registrasi-rawat-jalan') }}" class="nav-link">
                                        <i class="fas fa-file-signature nav-icon"></i>
                                        <p>Registrasi Rawat Jalan</p>
                                    </a>
                                </li>
                            </ul>
                            {{-- <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="order-barang.php" class="nav-link">
                                        <i class="fas fa-file-signature nav-icon"></i>
                                        <p>Order Barang</p>
                                    </a>
                                </li>
                            </ul> --}}
                            {{--
                        <li class="nav-item">
                            <a href="{{ url('scanqr') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    ScanQR
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li> --}}
                        @if (auth()->user()->level=="admin")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    dashboard
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('rekap-laporan') }}" class="nav-link">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Rekap Laporan
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('create-user') }}" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                    User Setting
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>
                        </li>
                        @endif
                </nav>
            </div>
        </aside>

        <div class=""> @yield('konten')</div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
            <strong>Copyright &copy; 2022 <a href="">NIALAPPS</a>.</strong> All rights reserved.
        </footer>




        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.js"
            integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jQuery/3.3.1/jQuery.min.js">
        </script>
        {{-- <script src="{{ asset ('asset/dashboard/plugins/jquery/jquery.min.js') }}"></script> --}}
        <!-- Bootstrap 4 -->
        <script src="{{ asset ('asset/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ asset ('asset/dashboard/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}">
        </script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}">
        </script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset ('asset/js/sweetalert2.js') }}"></script>
        <script src="{{ asset ('asset/js/sweetalert2.all.js') }}"></script>
        <script src="{{ asset ('asset/js/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset ('asset/js/autodate.js') }}"></script>
        <script src="{{ asset ('asset/js/bootstrap3-typeahead.min.js') }}"></script>
        <script src="{{ asset ('asset/js/typeahead.js') }}"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
        {{-- <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js">
            --}}
        </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
            <script>
            $(document).ready(function() {
             $('.js-example-basic-single').select2();
                });
                
                
            function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            // console.log(`Code matched = ${decodedText}`, decodedResult);
            $("#hasil").val(decodedText),
            $("#hasil2").val(decodedText)
            }

            function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            // console.warn(`Code scan error = ${error}`);
            }

            let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader",
            { fps: 10, qrbox: {width: 250, height: 250} },
            /* verbose= */ false);
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);


            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });

    
            
        </script>
        @livewireScripts

</body>

</html>
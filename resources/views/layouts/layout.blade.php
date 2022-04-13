@include('layouts.sidebar')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAK!! | @yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('public/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('public/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendors/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendors/jquery-typeahead-2.11.0/jquery.typeahead.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/nilai.css')}}">

    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="{{asset('public/vendors/choices.js/choices.min.css')}}" />

    <link rel="shortcut icon" href="{{asset('public/images/favicon.svg')}}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <!-- Sidebar -->
        @yield('sidebar')
        <!-- End of Sidebar -->

        <div id="main" class='layout-navbar'>
            <header>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">{{Auth::user()->nama}}</h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{asset('public/images/faces/1.jpg')}}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                                    style="min-width: 11rem;">
                                    <li>
                                        <h6 class="dropdown-header">Halo, {{Auth::user()->nama}}!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ubahPasswordModal">
                                        <i class="icon-mid bi bi-key me-2"></i> Ubah Password</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal"><i
                                                class="icon-mid bi bi-box-arrow-left me-2" ></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">
            <!-- Modal Logout -->
            <div class="modal fade text-left modal-borderless" id="logoutModal" tabindex="-1"
                role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Logout??</h5>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Klik tombol "Logout" di bawah jika anda ingin mengakhiri sesi.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tutup</span>
                            </button>
                            <button class="btn btn-danger ml-1" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Logout</span>
                            </button>
                        </div>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Ubah Password -->
            <div class="modal fade text-left modal-borderless" id="ubahPasswordModal" tabindex="-1"
                role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ubah Password</h5>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <form id="ubah-form" action="{{ url('/ubah-password') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">    
                                <div class="form-group">
                                    <label><b>Password Lama</b></label>
                                    <input type="password" class="form-control" placeholder="Masukkan Password Lama" name="pass_sekarang" id="pass_sekarang">
                                </div>
                                <div class="form-group">
                                    <label><b>Password Baru</b></label>
                                    <input type="password" class="form-control" placeholder="Masukkan Password Baru" name="pass_baru" id="pass_baru">
                                </div>
                                <div class="form-group">
                                    <label><b>Konfirmasi Password Baru</b></label>
                                    <input type="password" class="form-control" placeholder="Masukkan Password Baru" name="pass_baru_konfirm" id="pass_baru_konfirm">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Tutup</span>
                                </button>
                                <button class="btn btn-success ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Simpan</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Begin Page Content -->
            @yield('content')
            <!-- /.container-fluid -->
            </div>
        </div>
    </div>
    <script src="{{asset('public/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/js/mazer.js')}}"></script>
    
    <script src="{{asset('public/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('public/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('public/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('public/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('public/vendors/jquery-typeahead-2.11.0/jquery.typeahead.min.js')}}"></script>
    <script src="{{asset('public/vendors/moment/moment.min.js')}}"></script>
    <script src="{{asset('public/vendors/moment/id.min.js')}}"></script>

    <script src="{{asset('public/js/custom.js')}}"></script>
    
    <!-- Sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Include Choices JavaScript -->
    <script src="{{asset('public/vendors/choices.js/choices.min.js')}}"></script>
    <script src="{{asset('public/js/pages/form-element-select.js')}}"></script>

    @stack('script2')
    @yield('script')
</body>

</html>
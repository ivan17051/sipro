@section('sidebar')
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <h1 class="text-secondary">PAK!!</h1>
                        <!-- <img src="{{asset('public/images/logo/logo.png')}}" alt="Logo" srcset=""> -->
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Form Penilaian</li>

                <li class="sidebar-item  @yield('penilaianStatus')">
                    <a href="{{url('/penilaian')}}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Penilaian</span>
                    </a>
                </li>
                
                <li class="sidebar-title">Menu</li>

                <!-- <li class="sidebar-item @yield('dashboardStatus') ">
                    <a href="{{url('/')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li> -->

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Data Master</span>
                    </a>
                    <ul class="submenu @yield('masterStatus')">
                        <li class="submenu-item @yield('unitKerjaStatus')">
                            <a href="{{url('/unitKerja')}}">Unit Kerja</a>
                        </li>
                        <li class="submenu-item @yield('pegawaiStatus')">
                            <a href="{{url('/pegawai')}}">Pegawai</a>
                        </li>
                        <li class="submenu-item @yield('golonganStatus')">
                            <a href="{{url('/golongan')}}">Golongan</a>
                        </li>
                        <li class="submenu-item @yield('jabatanStatus')">
                            <a href="{{url('/jabatan')}}">Jabatan</a>
                        </li>
                        <li class="submenu-item @yield('pendidikanStatus')">
                            <a href="{{url('/pendidikan')}}">Pendidikan</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
@endsection
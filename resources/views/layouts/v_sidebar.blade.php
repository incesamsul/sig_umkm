<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">SI PENGADUAN </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">St</a>
        </div>
        <ul class="sidebar-menu">




            @if (auth()->user()->role == 'Administrator')
                <li class="" id="liDashboard"><a class="nav-link" href="{{ URL::to('/dashboard') }}"><i
                            class="far fa-chart-bar"></i> <span>Dashboard</span></a></li>
                <li class="" id="liProfile"><a class="nav-link" href="{{ URL::to('/profile') }}"><i
                            class="far fa-user-circle "></i>
                        <span>Profile</span></a></li>

                <li class="" id="liManajemenPengguna"><a class="nav-link"
                        href="{{ URL::to('/admin/pengguna') }}"><i class="far fa-user"></i> <span>Pengguna</span></a>
                </li>

                <li class="" id="liUmkm"><a class="nav-link" href="{{ URL::to('/admin/umkm') }}"><i
                            class="fas fa-store"></i> <span>Umkm</span></a></li>

                <li class="" id="liLokasiUmkm"><a class="nav-link" href="{{ URL::to('/admin/lokasi_umkm') }}">
                        <i class="fas fa-map-marked-alt"></i>
                        <span>Lokasi Umkm</span></a></li>

                <li class="" id="liPeta"><a class="nav-link" href="{{ URL::to('/admin/peta') }}">
                        <i class="fas fa-map"></i>
                        <span>Peta</span></a></li>
            @endif





        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ URL::to('/logout') }}" class="btn bg-main text-white btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </aside>
</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('storage/assets/img/apple-icon.png')}}">
    <link rel="icon" href="{{ asset('assets/img/logo-cv.png') }}">
    <title>
        Admin Page - CV Jaya Karya Konsultan
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="{{asset('storage/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('storage/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('storage/assets/css/material-dashboard.css?v=3.2.0')}}" rel="stylesheet" />
    <!-- Data tables -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    {{-- Summernote --}}
    <script src="{{ asset('summernote/summernote-bs5.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('summernote/summernote-bs5.css') }}">

</head>

<body class="g-sidenav-show  bg-gray-100">
    {{-- Sidebar --}}
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand px-4 py-3 m-0"
                href="{{route('dashboard')}}">
                <img src="{{asset('storage/assets/img/logo-ct-dark.png')}}" class="navbar-brand-img" width="26"
                    height="26" alt="main_logo">
                <span class="ms-1 text-sm text-dark">CV Jaya Karya</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Route::currentRouteName() == 'dashboard' ? 'bg-gradient-dark text-white active' : '' }}"
                        href="{{route('dashboard')}}">
                        <i class="material-symbols-rounded opacity-5">dashboard</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Route::currentRouteName() == 'admin' || Route::currentRouteName() == 'admin.create' || Route::currentRouteName() == 'admin.edit' ? 'bg-gradient-dark text-white active' : ''}}"
                        href="{{route('admin')}}">
                        <i class="material-symbols-rounded opacity-5">person</i>
                        <span class="nav-link-text ms-1">Data Administrator</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Route::currentRouteName() == 'galeri' || Route::currentRouteName() == 'galeri.create' || Route::currentRouteName() == 'galeri.edit' ? 'bg-gradient-dark text-white active' : ''}}"
                    href="{{route('galeri')}}">
                        <i class="material-symbols-rounded opacity-5">image</i>
                        <span class="nav-link-text ms-1">Data Galeri</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Route::currentRouteName() == 'blog' || Route::currentRouteName() == 'blog.create' || Route::currentRouteName() == 'blog.edit' ? 'bg-gradient-dark text-white active' : ''}}"
                    href="{{route('blog')}}">
                        <i class="material-symbols-rounded opacity-5">article</i>
                        <span class="nav-link-text ms-1">Data Blog Edukasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Route::currentRouteName() == 'profile' ? 'bg-gradient-dark text-white active' : ''}}" href="{{route('profile')}}">
                        <i class="material-symbols-rounded opacity-5">store</i>
                        <span class="nav-link-text ms-1">Profil & Kontak</span>
                    </a>
                </li>
                {{-- <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages
                    </h6>
                </li> --}}
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn btn-outline-primary mt-4 w-100 d-block d-md-none"
                    href="{{ route('admin.logout') }}"
                    type="button">Logout</a>
            </div>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main px-0 mx-3 mt-2 mb-2 border-radius-xl bg-white" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid d-flex align-items-center mb-2" style="max-height: 30px;">
                <div class="info">
                    <p id="infoText" class="text-dark mb-0 mb-md-2 fs-6 fs-md-6">Admin Center</p>
                </div>
                <div class="nav-item d-xl-none ps-3 mb-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                      <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                      </div>
                    </a>
                </div>
                <div class="logout ms-auto d-none d-md-block">
                    <a class="btn btn-outline-danger" href="{{ route('admin.logout') }}">Logout</a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        {{-- Isi Content --}}
        @yield('content')
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('storage/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/plugins/chartjs.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable({
                "responsive": true,
            });
        });
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('storage/assets/js/material-dashboard.min.js?v=3.2.0') }}"></script>
    <script>
        function updateAdminText() {
            const adminText = document.getElementById('infoText');
            const isDesktop = window.matchMedia("(min-width: 768px)").matches;

            if (isDesktop) {
                adminText.textContent = "Admin Center - CV. Jaya Karya Konsultan";
            } else {
                adminText.textContent = "Admin Center";
            }
        }
        updateAdminText();
        window.addEventListener('resize', updateAdminText);
    </script>
    <script>
        $(document).ready(function() {
            $('#isi-blog').summernote();
        });
    </script>
</body>

</html>

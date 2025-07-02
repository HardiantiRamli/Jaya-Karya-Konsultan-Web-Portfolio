@extends('admin.main')
@section('content')
<div class="d-flex flex-column overflow-x-hidden min-vh-90">
    <div class="container-fluid py-2">
        <div class="row">
            <div class="ms-3">
                <div class="header d-flex justify-content-between align-items-center">
                    <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 me-4">
                            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Admin</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
                <p class="mb-4">
                    Selamat datang, <span class="text-info">Admin</span>
                </p>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Data Administrator</p>
                                <h4 class="mb-0">{{ count($admin) }}</h4>
                            </div>
                            <div
                                class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                <i class="material-symbols-rounded opacity-10">person</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-2 ps-3">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Data Galeri</p>
                                <h4 class="mb-0">{{ count($galeri) }}</h4>
                            </div>
                            <div
                                class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                <i class="material-symbols-rounded opacity-10">image</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-2 ps-3">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Data Blog Edukasi</p>
                                <h4 class="mb-0">{{ count($blog) }}</h4>
                            </div>
                            <div
                                class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                <i class="material-symbols-rounded opacity-10">article</i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-2 ps-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-4 mt-auto">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                            Tim</a>
                        for a better web.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection

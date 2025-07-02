@extends('admin.main')
@section('content')
<div class="d-flex flex-column overflow-x-hidden min-vh-90">
    <div class="container-fluid py-2">
        <div class="row">
            <div class="ms-3">
                <div class="header d-flex justify-content-between align-items-center">
                    <h3 class="mb-0 h4 font-weight-bolder">Data Galeri</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 me-4">
                            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Admin</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">Tambah Data Galeri</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-6 mx-3 mt-2 container-fluid">
                <form class="card px-2" method="POST" action="{{ route('galeri.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="wrapper border-radius-2xl px-2 py-1">
                        <div class="input">
                            <div class="input-group input-group-static my-3">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" name="judul">
                                <br>
                                @error('judul')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="input">
                            <div class="input-group input-group-static my-3">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi">
                                <br>
                                @error('lokasi')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="input">
                            <div class="input-group input-group-static my-3">
                                <label for="waktu">Waktu</label>
                                <input type="text" class="form-control" name="waktu">
                                <br>
                                @error('waktu')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="input">
                            <div class="d-flex flex-column my-3">
                                <label for="img">IMG</label>
                                <input type="file" class="form-control" name="img" id="img" accept="image/*" style="border: 1px solid gray">
                                <br>
                                @error('img')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn btn-success w-100">Tambah</button>
                        </div>
                    </div>
                  </form>
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

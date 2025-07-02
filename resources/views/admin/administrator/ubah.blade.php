@extends('admin.main')
@section('content')
    <div class="d-flex flex-column overflow-x-hidden min-vh-90">
        <div class="container-fluid py-2">
            <div class="row">
                <div class="ms-3">
                    <div class="header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0 h4 font-weight-bolder">Data Administrator</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 me-4">
                                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Admin</a></li>
                                <li class="breadcrumb-item active text-dark" aria-current="page">Ubah Data Administrator
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-6 mx-3 mt-2 container-fluid">
                    <form method="POST" action="{{ route('admin.update', ['id' => $data->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="wrapper border-radius-2xl px-2 py-1">
                            <div class="input">
                                <div class="input-group input-group-static my-3">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $data->name }}">
                                    <br>
                                    @error('nama')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="input">
                                <div class="input-group input-group-static my-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $data->email }}">
                                    <br>
                                    @error('email')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="input">
                                <div class="input-group input-group-static my-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                    <br>
                                    @error('password')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn btn-info w-100">Simpan</button>
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

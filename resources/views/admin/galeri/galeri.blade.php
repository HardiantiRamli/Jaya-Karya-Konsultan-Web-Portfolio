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
                            <li class="breadcrumb-item active text-dark" aria-current="page">Data Galeri</li>
                        </ol>
                    </nav>
                </div>
                <p class="mt-4">
                    <a class="btn btn-outline-success text-sm" href="{{ route('galeri.create') }}">Tambah Data Galeri</a>
                </p>
            </div>
            <div class="col-12 px-4 container-fluid" style="overflow-x: auto;">
                <div class="wrap px-2 card" style="background-color: white overflow-x: auto;">
                    <table id="mytable" border="1" class="display no-wrap table table-striped" style="width:100%; overflow-x: auto;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Lokasi</th>
                                <th>Waktu</th>
                                <th>IMG</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dt)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td style="max-width: 200px; overflow-wrap: break-word; word-break: break-word; white-space: normal;">{{ $dt->judul_gambar }}</td>
                                    <td style="max-width: 200px; overflow-wrap: break-word; word-break: break-word; white-space: normal;">{{ $dt->lokasi }}</td>
                                    <td>{{ $dt->waktu }}</td>
                                    <td>
                                        <img src="{{ asset('img-galeri/' . $dt->img) }}" alt="{{ $dt->judul_gambar }}" style="width: 200px;">
                                    </td>
                                    <td class="">
                                        <a class="btn btn-outline-info" href="{{ route('galeri.edit', ['id'=>$dt->id]) }}">
                                            <i class="material-symbols-rounded opacity-10">edit</i>
                                            Edit
                                        </a>
                                        <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-hapus-{{ $dt->id }}">
                                            <i class="material-symbols-rounded opacity-10">delete</i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="modal-hapus-{{ $dt->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Hapus Data Galeri</h5>
                                          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Apakah kamu yakin ingin menghapus data galeri <b>{{ $dt->judul_gambar }}</b> </p>
                                        </div>
                                        <div class="modal-footer">
                                          <form action="{{ route('galeri.delete', ['id'=>$dt->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn bg-gradient-primary">Ya, Hapus</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Lokasi</th>
                                <th>Waktu</th>
                                <th>IMG</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
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

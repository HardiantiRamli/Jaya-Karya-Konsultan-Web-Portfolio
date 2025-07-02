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
                            <li class="breadcrumb-item active text-dark" aria-current="page">Data Administrator</li>
                        </ol>
                    </nav>
                </div>
                <p class="mt-4">
                    <a class="btn btn-outline-success text-sm" href="{{ route('admin.create') }}">Tambah Data Administrator</a>
                </p>
            </div>
            <div class="col-12 px-4 container-fluid">
                <div class="wrap px-2 card" style="background-color: white">
                    <table id="mytable" border="1" class="table table-striped table-responsive" style="width:100%; overflow-x: auto;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dt)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dt->name }}</td>
                                    <td>{{ $dt->email }}</td>
                                    <td class="d-flex gap-2">
                                        <a class="btn btn-outline-info" href="{{ route('admin.edit', ['id'=>$dt->id]) }}">
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
                                          <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Hapus Data Administrator</h5>
                                          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Apakah kamu yakin ingin menghapus data admin <b>{{ $dt->name }}</b> </p>
                                        </div>
                                        <div class="modal-footer">
                                          <form action="{{ route('admin.delete', ['id'=>$dt->id]) }}" method="POST">
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
                                <th>Name</th>
                                <th>Email</th>
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

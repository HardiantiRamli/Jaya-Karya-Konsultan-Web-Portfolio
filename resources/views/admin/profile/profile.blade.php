@extends('admin.main')
@section('content')
<div class="d-flex flex-column overflow-x-hidden min-vh-90">
    <div class="container-fluid py-2">
        <div class="row">
            <!-- Profile Section -->
            <div class="col-md-6">
                <div class="card p-4 mb-4">
                    <h3 class="mb-2 h4 font-weight-bolder">Profile</h3>
                    <form method="POST" action="{{ route('profile.update', ['id'=>$dataProfile->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="d-flex flex-column input-group input-group-outline my-3">
                            <h6>Deskripsi:</h6>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10" placeholder="Deskripsi ....." style="width: 100%;">{{ old('deskripsi', $dataProfile->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="d-flex flex-column input-group input-group-outline my-3">
                            <h6>Visi Misi:</h6>
                            <textarea name="visi_misi" id="visi_misi" class="form-control" cols="30" rows="10" placeholder="Visi Misi ....." style="width: 100%;">{{ old('visi-misi', $dataProfile->visi_misi) }}</textarea>
                            @error('visi_misi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-info w-100">Simpan</button>
                    </form>
                </div>
            </div>

            <!-- Kontak Section -->
            <div class="col-md-6">
                <div class="card p-4 mb-4">
                    <h3 class="mb-2 h4 font-weight-bolder">Kontak</h3>
                    <form method="POST" action="{{ route('kontak.update', ['id'=>$dataKontak->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-group input-group-static my-3">
                            <label for="whatsapp">No. Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $dataKontak->no_whatsapp) }}">
                            @error('whatsapp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-group input-group-static my-3">
                            <label for="telepon">No. Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ old('telepon', $dataKontak->no_telepon) }}">
                            @error('telepon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="input-group input-group-static my-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $dataKontak->email) }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-info w-100">Simpan</button>
                    </form>
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
</script>
@endsection

@extends('mahasiswa.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit mahasiswa
                </div>
                <div class="float-end">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="npm" class="col-md-4 col-form-label text-md-end text-start">NPM</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm" value="{{ $mahasiswa->npm }}">
                            @if ($errors->has('npm'))
                                <span class="text-danger">{{ $errors->first('npm') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama" class="col-md-4 col-form-label text-md-end text-start">Nama</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $mahasiswa->nama }}">
                            @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jk" class="col-md-4 col-form-label text-md-end text-start">Jenis Kelamin</label>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="laki" value="Laki-Laki" {{ $mahasiswa->jk == 'Laki-Laki' ? 'checked' : '' }}>
                                <label class="form-check-label" for="laki">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan" {{ $mahasiswa->jk == 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            @if ($errors->has('jk'))
                                <span class="text-danger">{{ $errors->first('jk') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-end text-start">Kelas</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ $mahasiswa->kelas }}">
                            @if ($errors->has('kelas'))
                                <span class="text-danger">{{ $errors->first('kelas') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jurusan" class="col-md-4 col-form-label text-md-end text-start">Jurusan</label>
                        <div class="col-md-6">
                            <select class="form-select @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan">
                                <option value="blank" {{ $mahasiswa->jurusan == 'blank' ? 'selected' : '' }}> </option>
                                <option value="Teknik Informatika" {{ $mahasiswa->jurusan == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                                <option value="Manajemen" {{ $mahasiswa->jurusan == 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
                                <option value="Akuntansi" {{ $mahasiswa->jurusan == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                            </select>
                            @if ($errors->has('jurusan'))
                                <span class="text-danger">{{ $errors->first('jurusan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="fakultas" class="col-md-4 col-form-label text-md-end text-start">Fakultas</label>
                        <div class="col-md-6">
                            <select class="form-select @error('fakultas') is-invalid @enderror" id="fakultas" name="fakultas">
                                <option value="blank" {{ $mahasiswa->Fakultas == 'blank' ? 'selected' : '' }}> </option>
                                <option value="Teknik Industri" {{ $mahasiswa->fakultas == 'Teknik Industri' ? 'selected' : '' }}>Teknik Industri</option>
                                <option value="Ekonomi" {{ $mahasiswa->fakultas == 'Ekonomi' ? 'selected' : '' }}>Ekonomi</option>
                                <option value="Hukum" {{ $mahasiswa->fakultas == 'Hukum' ? 'selected' : '' }}>Hukum</option>
                            </select>
                            @if ($errors->has('fakultas'))
                                <span class="text-danger">{{ $errors->first('fakultas') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="region" class="col-md-4 col-form-label text-md-end text-start">Region</label>
                        <div class="col-md-6">
                            <select class="form-select @error('region') is-invalid @enderror" id="region" name="region">
                                <option value="blank" {{ $mahasiswa->region == 'blank' ? 'selected' : '' }}> </option>
                                <option value="Depok" {{ $mahasiswa->region == 'Depok' ? 'selected' : '' }}>Depok</option>
                                <option value="Kalimalang" {{ $mahasiswa->region == 'Kalimalang' ? 'selected' : '' }}>Kalimalang</option>
                                <option value="Karawaci" {{ $mahasiswa->region == 'Karawaci' ? 'selected' : '' }}>Karawaci</option>
                            </select>
                            @if ($errors->has('region'))
                                <span class="text-danger">{{ $errors->first('region') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_telp" class="col-md-4 col-form-label text-md-end text-start">Nomor Telp</label>
                        <div class="col-md-6">
                            <input type="tel" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ $mahasiswa->no_telp }}" maxlength="12">
                            @if ($errors->has('no_telp'))
                                <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                            @endif
                            <small class="form-text text-muted">Maksimal digit nomor telephone 12 Digit</small>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
@extends('mahasiswa.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Mahasiswa
                </div>
                <div class="float-end">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="npm" class="col-md-4 col-form-label text-md-end text-start">NPM</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm" value="{{ old('npm') }} placeho"" maxlength="8">
                            @if ($errors->has('npm'))
                                <span class="text-danger">{{ $errors->first('npm') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama" class="col-md-4 col-form-label text-md-end text-start">Nama</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jk" class="col-md-4 col-form-label text-md-end text-start">Jenis Kelamin</label>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="laki" value="Laki-Laki" {{ old('jk') == 'Laki-Laki' ? 'checked' : '' }}>
                                <label class="form-check-label" for="laki">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan" {{ old('jk') == 'Perempuan' ? 'checked' : '' }}>
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
                          <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ old('kelas') }}">
                            @if ($errors->has('kelas'))
                                <span class="text-danger">{{ $errors->first('kelas') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jurusan" class="col-md-4 col-form-label text-md-end text-start">Jurusan</label>
                        <div class="col-md-6">
                            <select class="form-select @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan">
                                <option value="blank" {{ old('jurusan') == 'blank' ? 'selected' : '' }}> </option>
                                <option value="Teknik Informatika" {{ old('jurusan') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                                <option value="Manajemen" {{ old('jurusan') == 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
                                <option value="Akuntansi" {{ old('jurusan') == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
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
                                <option value="blank" {{ old('fakultas') == 'blank' ? 'selected' : '' }}> </option>
                                <option value="Teknik Industri" {{ old('fakultas') == 'Teknik Industri' ? 'selected' : '' }}>Teknik Industri</option>
                                <option value="Ekonomi" {{ old('fakultas') == 'Ekonomi' ? 'selected' : '' }}>Ekonomi</option>
                                <option value="Hukum" {{ old('fakultas') == 'Hukum' ? 'selected' : '' }}>Hukum</option>
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
                                <option value="blank" {{ old('region') == 'blank' ? 'selected' : '' }}> </option>
                                <option value="Depok" {{ old('region') == 'Depok' ? 'selected' : '' }}>Depok</option>
                                <option value="Kalimalang" {{ old('region') == 'Kalimalang' ? 'selected' : '' }}>Kalimalang</option>
                                <option value="Karawaci" {{ old('region') == 'Karawaci' ? 'selected' : '' }}>Karawaci</option>
                            </select>
                            @if ($errors->has('region'))
                                <span class="text-danger">{{ $errors->first('region') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_telp" class="col-md-4 col-form-label text-md-end text-start">Nomor Telp</label>
                        <div class="col-md-6">
                            <input type="tel" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp') }}" maxlength="13">
                            @if ($errors->has('no_telp'))
                                <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                            @endif
                            <small class="form-text text-muted">Maksimal digit nomor telephone 12 Digit</small>
                        </div>
                    </div>


                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add DataMahasiswa">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    

@endsection



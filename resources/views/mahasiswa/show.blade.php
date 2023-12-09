@extends('mahasiswa.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Informasi Data Mahasiswa
                </div>
                <div class="float-end">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="npm" class="col-md-4 col-form-label text-md-end text-start"><strong>NPM:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $mahasiswas->npm }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="nama" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $mahasiswas->nama }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="jk" class="col-md-4 col-form-label text-md-end text-start"><strong>Jenis Kelamin:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $mahasiswas->jk }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-end text-start"><strong>Kelas:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $mahasiswas->kelas }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="jurusan" class="col-md-4 col-form-label text-md-end text-start"><strong>Jurusan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $mahasiswas->jurusan }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="fakultas" class="col-md-4 col-form-label text-md-end text-start"><strong>Fakultas:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $mahasiswas->fakultas }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="region" class="col-md-4 col-form-label text-md-end text-start"><strong>Region:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $mahasiswas->region }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="no_telp" class="col-md-4 col-form-label text-md-end text-start"><strong>Nomor Telepon:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $mahasiswas->no_telp }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection
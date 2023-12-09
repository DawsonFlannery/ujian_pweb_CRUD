@extends('mahasiswa.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">List Mahasiswa</div>
            <div class="card-body">
                <a href="{{ route('welcome') }}" class="btn btn-primary btn-sm my-2"><i class="bi bi-arrow-left-circle"></i> Back</a>
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Mahasiswa</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Kampus</th>
                        <th scope="col">Nomor Telp</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswa as $mahasiswas)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $mahasiswas->npm }}</td>
                            <td>{{ $mahasiswas->nama }}</td>
                            <td>{{ $mahasiswas->jk }}</td>
                            <td>{{ $mahasiswas->kelas }}</td>
                            <td>{{ $mahasiswas->jurusan }}</td>
                            <td>{{ $mahasiswas->fakultas }}</td>
                            <td>{{ $mahasiswas->region }}</td>
                            <td>{{ $mahasiswas->no_telp }}</td>
                            <td>
                                <form action="{{ route('mahasiswa.destroy', $mahasiswas->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('mahasiswa.show', $mahasiswas->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('mahasiswa.edit', $mahasiswas->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah data ingin dihapus?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="10">
                                <span class="text-danger">
                                    <strong>Mahasiswa Tidak Ditemukan!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $mahasiswa->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection
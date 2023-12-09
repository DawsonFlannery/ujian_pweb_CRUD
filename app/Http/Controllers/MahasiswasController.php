<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreMahasiswasRequest;
use App\Http\Requests\UpdateMahasiswasRequest;

class MahasiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     * [NEW CONTROLLER]
     */
    public function index(): View
    {
        return view('mahasiswa.index', [
            'mahasiswa' => Mahasiswas::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswasRequest  $request): RedirectResponse
    {
        Mahasiswas::create($request->all());

    $mahasiswas = new Mahasiswas();
    return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswas $mahasiswa): View
    {
        return view('mahasiswa.show', [
            'mahasiswas' => $mahasiswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswas $mahasiswa): View
    {
        return view('mahasiswa.edit', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswasRequest $request, Mahasiswas $mahasiswa): RedirectResponse
    {    
    $mahasiswa->npm = $request->input('npm');
    $mahasiswa->nama = $request->input('nama');
    $mahasiswa->jk = $request->input('jk');
    $mahasiswa->kelas = $request->input('kelas');
    $mahasiswa->jurusan = $request->input('jurusan');
    $mahasiswa->fakultas = $request->input('fakultas');
    $mahasiswa->region = $request->input('region');
    $mahasiswa->no_telp = $request->input('no_telp');
    
    $mahasiswa->save();

    return redirect()->route('mahasiswa.index')
                ->withSuccess('Data Mahasiwa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswas $mahasiswa): RedirectResponse
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')
                ->withSuccess('Data Mahasiwa Berhasil Dihapus!');
    }
}

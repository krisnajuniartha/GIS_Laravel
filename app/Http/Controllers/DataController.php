<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Marker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    // Fungsi untuk menampilkan semua pengguna
    public function getData()
    {
        $data = Data::orderBy('id_rs', 'desc')->get();
        return view('frontend.index')->with('data', $data);
    }

    public function getMarker()
    {
        $markers = Data::select('id_rs', 'nama_rs','latlng', 'tipe_rs', 'foto_rs')->get();
        return response()->json($markers);
        // $markers = Marker::select('latlng_rs')->get();
        // return response()->json($markers);
    }

    // Fungsi untuk menampilkan formulir tambah pengguna
    public function create()
    {

    }

    // Fungsi untuk menyimpan pengguna baru
    public function store(Request $request)
{
    // Validasi data yang diterima dari request
    $validatedData = $request->validate([
        'nama_rs' => 'required',
        'latlng' => 'required',
        'tipe_rs' => 'required',
        'foto_rs' => 'required',
        // Sesuaikan dengan nama-nama field yang ada pada tabel
    ]);

    // Memasukkan data ke dalam database
    $data = Data::create([
        'nama_rs' => $validatedData['nama_rs'],
        'latlng' => $validatedData['latlng'],
        'tipe_rs' => $validatedData['tipe_rs'],
        'foto_rs' => $validatedData['foto_rs'],
        // Sesuaikan dengan nama-nama field yang ada pada tabel
    ]);

    // Mendapatkan data terbaru dari database setelah disimpan
    $latestData = Data::orderBy('id_rs', 'desc')->get();

    // Redirect back to index page after successful store
    // Mengirimkan variabel $latestData ke view
    return view('frontend.index')->with('data', $latestData);
}

    // Fungsi untuk menampilkan detail pengguna berdasarkan ID
    public function show($id)
    {
        // Logika untuk menampilkan detail pengguna
    }
// Fungsi untuk menampilkan formulir edit pengguna berdasarkan ID
    public function edit($id)
    {
        // Logika untuk menampilkan formulir edit pengguna pp
    }

    // Fungsi untuk memperbarui pengguna berdasarkan ID
    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui pengguna
    }

    // Fungsi untuk menghapus pengguna berdasarkan ID
    public function destroy($id)
    {
        Data::where('id',$id)->delete();
        return view('backend.index')->with('success','Data Berhasil Dihapus');
    }
}

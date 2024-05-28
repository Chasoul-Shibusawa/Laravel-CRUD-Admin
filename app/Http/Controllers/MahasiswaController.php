<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; // Ensure this is the correct namespace for your model

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view('admin/dashboard', ['mahasiswa'=> $mahasiswa]);
    }

    public function tambah(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'npm' => $request->npm,
            'name' => $request->name,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('admin.dashboard.tambah')->with('success', 'Data berhasil ditambahkan');
    }


	public function hapus(Request $request)
{
    $request->validate([
        'npm' => 'required|exists:mahasiswa,npm'
    ]);

    $npm = $request->npm;

    Mahasiswa::where('npm', $npm)->delete();
    return redirect('admin/dashboard')->with('success', 'Record deleted successfully.');
}
	function ModalHapusBerita ($npm) {
		('[name="npm"]').value($npm);
	   
   }

   public function matkuls()
   {
	   $matkuls = DB::table('matkuls')->get();

	   return view('mahasiswa/dashboard', ['matkuls'=> $matkuls]);
   }

   public function edit(Request $request)
   {
       DB::table('mahasiswa')->where('npm', $request->npm)->update([
           'name' => $request->name,
           'prodi' => $request->prodi,
           'semester' => $request->semester,
           'kelas' => $request->kelas,
       ]);
   
       return redirect('admin/dashboard')->with('success', 'Data updated successfully');
   }
   
}

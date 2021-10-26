<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function daftar(){
        return view('daftar');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('calon_siswa')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenisKelamin,
            'agama' => $request->agama,
            'sekolah_asal' => $request->sekolahAsal
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pendaftar');
    
    }

    public function pendaftar(){
    	// mengambil data dari table pegawai
    	$calonSiswa = DB::table('calon_siswa')->get();
 
    	// mengirim data pegawai ke view index
    	return view('pendaftar',['calon_siswa' => $calonSiswa]);
        // return view('pendaftar');
    }

    public function edit($id){
	// mengambil data pegawai berdasarkan id yang dipilih
	$calonSiswa = DB::table('calon_siswa')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['calon_siswa' => $calonSiswa]);
    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('calon_siswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenisKelamin,
            'agama' => $request->agama,
            'sekolah_asal' => $request->sekolahAsal
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pendaftar');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('calon_siswa')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/pendaftar');
    }
}

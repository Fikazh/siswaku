@extends('master')
@section('judul_page', 'Halaman Daftar')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Daftar')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 <!-- isi kontent -->

    <form action="/daftar/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="sekolahAsal">Asal Sekolah</label>
                <input type="text" class="form-control" id="sekolahAsal" name="sekolahAsal" placeholder="Masukkan Asal Sekolah" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenisKelamin" name="jenisKelamin" required>
                    <option value="">-Pilih Jenis Kelamin-</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group col-sm-6">
                <label for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama" required>
                    <option value="">-Pilih Agama-</option>
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddah">Buddah</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12">
                <label for="alamat">Alamat Tinggal</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
        
    </form>
    <!-- <form action="/daftar/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
	    	Nama <input type="text" name="nama" required="required"> <br/>
        </div>
        Jenis Kelamin
            <input type="radio" id="lakiLaki" name="jenisKelamin" value="Laki - Laki" required="required">
            <label for="lakiLaki">Laki - Laki</label>
            <input type="radio" id="perempuan" name="jenisKelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label><br> 
		Agama
            <input type="radio" id="islam" name="agama" value="Islam" required="required">
            <label for="islam">Islam</label>
            <input type="radio" id="Katolik" name="agama" value="Katolik">
            <label for="Katolik">Katolik</label>
            <input type="radio" id="protestan" name="agama" value="Protestan">
            <label for="protestan">Protestan</label><br>
            <input type="radio" id="hindu" name="agama" value="Hindu">
            <label for="hindu">Hindu</label>
            <input type="radio" id="buddah" name="agama" value="Buddah">
            <label for="buddah">Buddah</label>
            <input type="radio" id="khonghucu" name="agama" value="Khonghucu">
            <label for="khonghucu">Khonghucu</label><br>
        Sekolah Asal <input type="text" name="sekolahAsal" required="required"> <br/>
        Alamat Tinggal <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form> -->
@endsection
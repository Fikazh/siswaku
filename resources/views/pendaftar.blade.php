@extends('master')
@section('judul_page', 'Halaman Pendaftar')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Pendaftar')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 <table class="table table-hover">
		<thead>
			<tr style="background-color:#2c8ebb; color:#ffffff;">
				<th scope="col">No</th>
				<th scope="col">ID</th>
				<th scope="col">Nama</th>
				<th scope="col">Jenis Kelamin</th>
				<th scope="col">Agama</th>
				<th scope="col">Sekolah Asal</th>
				<th scope="col">Alamat</th>
				<th scope="col">Opsi</th>
			</tr>
		</thead>
		<?php $index=1?>
		@foreach($calon_siswa as $cs)
		<tbody>
			<tr>
				<th scope="row">{{$index++}}</th>
				<th scope="row">{{ $cs->id }}</th>
				<td>{{ $cs->nama }}</td>
				<td>{{ $cs->jenis_kelamin }}</td>
				<td>{{ $cs->agama }}</td>
				<td>{{ $cs->sekolah_asal }}</td>
				<td>{{ $cs->alamat }}</td>
				<td>
					<a href="/pendaftar/edit/{{ $cs->id }}">Edit</a>
					|
					<a href="/pendaftar/hapus/{{ $cs->id }}">Hapus</a>
				</td>
			</tr>
		</tbody>
		
		@endforeach
	</table>
 
@endsection
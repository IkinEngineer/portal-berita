@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h3>Tambah Berita</h3>
        <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control mb-2" required id="">
            <textarea name="konten" class="form-control cols-30 rows-10 mb-2 " placeholder="Masukkan Konten"></textarea>
            <input type="file" name="image" placeholder="Masukkan Gambar" class="form-control mb-2" required>
            <input type="date" name="tanggal" placeholder="Masukkan tanggal" class="form-control mb-2" required>
            <button type="submit" class="btn btn-secondary">Tambah</button>
        </form>
    </div>
@endsection

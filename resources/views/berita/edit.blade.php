@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h3>Edit Berita</h3>
        <form action="{{ route('berita.update',$berita->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control mb-2" required value="{{ $berita->judul }}">
            <textarea name="konten" class="form-control mb-2" rows="10" cols="30" placeholder="Masukkan Konten">{{ $berita->konten }}</textarea>
            <input type="date" name="tanggal" placeholder="Masukkan tanggal" class="form-control mb-2" required value="{{ $berita->tanggal }}">

            @if ($berita->image)
                <p>File saat ini: <strong>{{ $berita->image }}</strong></p>
            @endif
            <input class="form-control mb-2" type="file" name="image" id="image">
            <button type="submit" class="btn btn-secondary">Tambah</button>
        </form>
    </div>
@endsection
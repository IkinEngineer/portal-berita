@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="container">
            <img src="{{ url('storage/' . $berita->gambar) }}" class="mb-4" style="width: 50%">
            <h4>{{ $berita->judul  }}</h4>
            <span class="badge bg-primary">{{ $berita->kategori->nama_kategori }}</span>
            <div class="">
                <p class="fs-5 mt-4">{{ $berita->isi}}</p>
                <small class="text-muted"><b>Ditulis oleh | </b>{{ $berita->penulis->nama ?? 'Penulis' }}</small>
                <p class="badge text-bg-secondary">{{ $berita->tgl }}</p>
            </div>
        </div>
    </div>
@endsection
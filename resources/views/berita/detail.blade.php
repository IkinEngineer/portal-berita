@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="container">
        <img src="{{ url('storage/'. $berita->image) }}" class="mb-4" style="width: 50%">
        <h4>{{ $berita->judul  }}</h4>
        <div class="">
            <p class="badge text-bg-secondary">{{ $berita->tanggal }}</p>
            <p class="fs-5 mt-4">{{ $berita->konten }}</p>
        </div>
    </div>
</div>
@endsection
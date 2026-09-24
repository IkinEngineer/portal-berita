@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Edit Berita</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('berita.update', $berita->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input class="form-control mb-3" type="text" name="judul" id="" value="{{ $berita->judul }}" required>
                    <textarea class="form-control mb-3" name="isi" id="" cols="30" rows="10">{{ $berita->isi }}</textarea>
                    <input class="form-control mb-3" type="date" name="tgl" id="" value="{{ $berita->tgl }}" required>

                    @if ($berita->gambar)
                        <p class="text-muted small mb-1">File saat ini: <strong>{{ $berita->gambar }}</strong></p>
                    @endif
                    <input class="form-control mb-3" type="file" name="gambar" id="">
                    <select class="form-control mb-3" name="kategori_id" required>
                        <option value="">-- Pilih Kategori --</option>

                        @foreach ($kategori as $k)
                            <option value="{{ $k->id }}" {{ $berita->kategori_id == $k->id ? 'selected' : '' }}>
                                {{ $k->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary form-control" type="submit">Edit Berita</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="row row-cols-md-3 g-3 mt-5">
        @foreach ($berita as $b)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ url('storage/'. $b->gambar) }}" alt="">
                </div>
                <div class="card-body">
                    <h2>{{ $b->judul }}</h2>
                    <p>{{ Str::limit($b->isi, 100, '...') }}</p>
                    <div class="d-flex-justify-content-between-align-items-center">
                        <div class="btn-group">
                            <a href="{{ url('/berita/'.$b->id) }}" class="btn btn-sm btn-outline-secondary">Selengkapnya....</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

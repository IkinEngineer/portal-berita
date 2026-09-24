@extends('layouts.app')
@section('content') 
    <div class="row row-cols-1 row-cols-md-3 g-3 mt-5">
        @foreach ($berita as $b)
            <div class="col">
                <div class="card shadow-sm h-100">
                    <img src="{{ url('storage/' . $b->gambar) }}"style="height: 250px; width: 100%; object-fit: cover;"alt="">
                    <div class="card-body d-flex flex-column">
                        <h2>{{ $b->judul }}</h2>
                        <p>{{ Str::limit($b->isi, 100, '...') }}</p>
                        <div class="mt-auto">
                            <a href="{{ url('/berita/' . $b->id) }}"class="btn btn-sm btn-outline-secondary">
                                Selengkapnya....
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
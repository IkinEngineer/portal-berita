@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Berita</h3>
            </div>
            <div class="card-body">
                <form action="{{route('berita.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @error('judul')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input class="form-control mb-3" type="text" name="judul" id="" placeholder="Judul">

                    @error('isi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <textarea class="form-control mb-3" name="isi" id="" cols="30" rows="10" placeholder="isi berita disini....."></textarea>

                    @error('gambar')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input class="form-control mb-3" type="file" name="gambar" id="">

                    @error('tgl')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input class="form-control mb-3" type="date" name="tgl" id="">

                    @error('kategori_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <select class="form-control mb-3" name="kategori_id" >
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                    
                    <button class="btn btn-primary form-control " type="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="">
        <h3>Dashboard</h3>
        <a class="btn btn-secondary" href="{{ route('berita.create') }}">Tambah Berita</a>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Judul</td>
                    <td>Image</td>
                    <td>Tangal</td>
                    <td style="width: 0px">Aksi</td>
                </tr>
            </thead>

            <tbody>
                @forelse ($berita as $b)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $b->judul }}</td>
                    <td><img src="{{ url('storage/'.$b->image) }}" alt="" style="width:50px"></td>
                    <td>{{ $b->tanggal }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('berita.show',$b->id) }}" class="btn btn-outline-primary">Detail</a>
                        <a href="{{ route('berita.edit',$b->id) }}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{ route('berita.destroy', $b->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger" value="delete" onclick="return confirm('yakin ingin dihapus?')">
                        </form>
                    </td>
                </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
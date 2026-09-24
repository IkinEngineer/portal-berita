@extends('layouts.app')
@section('content')
<div class="">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required id="">
        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required id="">
        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required id="">
        <input type="hidden" name="role" value="0">
        <button type="submit">Tambah</button>
    </form>
</div>
@endsection
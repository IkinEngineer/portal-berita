@extends('layouts.app')
@section('content')
<form action="{{ route('login')}}" method="post">
    <input type="email" name="email" placeholder="Masukkan Email" class="form-control mb-2"id="">
    <input type="password" name="password" placeholder="Masukkan Password" class="form-control mb-2"id="">
    <button type="submit">Masuk</button>
    <p>Belum punya akun?<a href="/registrasiform">Registrasi Disini</a></p>
</form>

@endsection
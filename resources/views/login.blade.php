@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Login</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('login')}}" method="post">
                    <input type="email" name="email" placeholder="Masukkan Email" class="form-control mb-2" id="">
                    <input type="password" name="password" placeholder="Masukkan Password" class="form-control mb-2" id="">
                    <button type="submit" class="btn btn-secondary">Masuk</button>
                </form>
            </div>
        </div>
    </div>
@endsection
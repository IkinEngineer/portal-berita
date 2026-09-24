@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Login</h1>
            </div>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('login')}}" method="post">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="email" name="email" placeholder="Masukkan Email" class="form-control mb-2" id="">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="password" name="password" placeholder="Masukkan Password" class="form-control mb-2" id="">
                    <button type="submit" class="btn btn-secondary">Masuk</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.guest.app')

@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="bg-white rounded p-5 shadow-sm">
                        <h4 class="text-primary text-center">Selamat Datang</h4>
                        <h1 class="display-6 text-center mb-4">Login</h1>

                        {{-- Alert login gagal --}}
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- Alert validasi --}}
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('auth.proses') }}" method="POST">
                            @csrf
                            {{-- input username & password tetap seperti sebelumnya --}}
                        </form>

                        <form action="{{ route('auth.proses') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control rounded-pill py-3 px-4" id="username"
                                    name="username" value="{{ old('username') }}" placeholder="Masukkan username">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control rounded-pill py-3 px-4" id="password"
                                    name="password" placeholder="Masukkan password">
                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill w-100 py-3">Login</button>
                        </form>

                        <p class="text-center mt-4 mb-0">Belum punya akun? <a href="{{ route('register') }}">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

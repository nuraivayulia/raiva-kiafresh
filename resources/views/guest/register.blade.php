@extends('layouts.guest.app')

@section('content')
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="bg-white rounded p-5 shadow-sm">
                    <h4 class="text-primary text-center">Buat Akun Baru</h4>
                    <h1 class="display-6 text-center mb-4">Register</h1>

                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control rounded-pill py-3 px-4" id="name" name="name" value="{{ old('name') }}" placeholder="Nama lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-pill py-3 px-4" id="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-pill py-3 px-4" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control rounded-pill py-3 px-4" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password">
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill w-100 py-3">Register</button>
                    </form>

                    <p class="text-center mt-4 mb-0">Sudah punya akun? <a href="{{ route('auth') }}">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

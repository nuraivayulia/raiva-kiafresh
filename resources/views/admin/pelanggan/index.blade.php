@extends('layouts.admin.app')

@section('content')

{{-- start konten  --}}
<main class="content">
       <main class="content">

  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif
  @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif
  @if ($errors->any())
    <div class="alert alert-warning" role="alert">
      Data belum bisa disimpan, periksa kembali isian form di bawah.
    </div>
  @endif

  <div class="page-header">
    <div>
      <h1>Tambah Pelanggan</h1>
      <p>Isi data pelanggan baru</p>
    </div>
    <a href="{{ route('admin.pelanggan.index') }}" class="primary-btn">Ke Daftar Pelanggan</a>
  </div>

  <div class="summary-card">
    <form action="{{ route('admin.pelanggan.store') }}" method="POST" novalidate>
      @csrf
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror"
                 id="nama" name="nama" placeholder="Masukkan nama pelanggan"
                 value="{{ old('nama') }}">
          @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-6 mb-3">
          <label for="no_hp" class="form-label">No. HP</label>
          <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                 id="no_hp" name="no_hp" placeholder="08xxxxxxxxxx"
                 value="{{ old('no_hp') }}">
          @error('no_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
      </div>

      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control @error('alamat') is-invalid @enderror"
                  id="alamat" name="alamat" rows="4"
                  placeholder="Masukkan alamat pelanggan">{{ old('alamat') }}</textarea>
        @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <div class="d-flex gap-2">
        <button type="submit" class="primary-btn">Simpan</button>
        <a href="{{ route('admin.pelanggan.index') }}" class="btn btn-light border">Batal</a>
      </div>
    </form>
  </div>

</main>
{{-- end content  --}}
@endsection

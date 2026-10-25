@extends('layouts.admin.app')

@section('content')

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
      <h1>Edit Layanan</h1>
      <p>Ubah data layanan</p>
    </div>
    <a href="{{ route('admin.layanan.index') }}" class="primary-btn">Ke Daftar Layanan</a>
  </div>

  <div class="summary-card">
    <form action="{{ route('admin.layanan.update', $layanan) }}" method="POST" novalidate>
      @csrf
      @method('PUT')

      <div class="row">
  <div class="col-md-6 mb-3">
    <label for="nama_layanan" class="form-label">Nama Layanan</label>
    <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror"
           id="nama_layanan" name="nama_layanan" placeholder="Contoh: Cuci Kiloan"
           value="{{ old('nama_layanan', $layanan->nama_layanan) }}">
    @error('nama_layanan') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>
  <div class="col-md-6 mb-3">
    <label for="harga_per_kg" class="form-label">Harga per Kg (Rp)</label>
    <input type="number" class="form-control @error('harga_per_kg') is-invalid @enderror"
           id="harga_per_kg" name="harga_per_kg" placeholder="Contoh: 7000"
           value="{{ old('harga_per_kg', $layanan->harga_per_kg) }}">
    @error('harga_per_kg') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>
</div>

<div class="row">
  <div class="col-md-6 mb-3">
    <label for="estimasi_hari" class="form-label">Estimasi (hari)</label>
    <input type="number" class="form-control @error('estimasi_hari') is-invalid @enderror"
           id="estimasi_hari" name="estimasi_hari" placeholder="Contoh: 2"
           value="{{ old('estimasi_hari', $layanan->estimasi_hari) }}">
    @error('estimasi_hari') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>
</div>
      <div class="d-flex gap-2">
        <button type="submit" class="primary-btn">Perbarui</button>
        <a href="{{ route('admin.layanan.index') }}" class="btn btn-light border">Batal</a>
      </div>
    </form>
  </div>

</main>

@endsection
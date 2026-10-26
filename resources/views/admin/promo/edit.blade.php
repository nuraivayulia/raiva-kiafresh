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
      <h1>Edit Promo</h1>
      <p>Ubah data promo</p>
    </div>
    <a href="{{ route('admin.promo.index') }}" class="primary-btn">Ke Daftar Promo</a>
  </div>

  <div class="summary-card">
    <form action="{{ route('admin.promo.update', $promo) }}" method="POST" novalidate>
      @csrf
      @method('PUT')

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="kode_promo" class="form-label">Kode Promo</label>
          <input type="text" class="form-control @error('kode') is-invalid @enderror"
                 id="kode" name="kode" placeholder="Masukkan kode promo"
                 value="{{ old('kode', $promo->kode) }}">
          @error('kode') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="col-md-6 mb-3">
          <label for="diskon_persen " class="form-label">Diskon (%)</label>
          <input type="number" class="form-control @error('diskon_persen') is-invalid @enderror"
                 id="diskon_persen" name="diskon_persen" placeholder="Masukkan diskon"
                 value="{{ old('diskon_persen', $promo->diskon_persen) }}">
          @error('diskon_persen') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
      </div>

      <div class="mb-3">
  <label for="aktif" class="form-label">Status</label>
  <select class="form-select @error('aktif') is-invalid @enderror" id="aktif" name="aktif">
    <option value="">-- Pilih --</option>
    <option value="1" {{ (string) old('aktif', $promo->aktif) === '1' ? 'selected' : '' }}   {{-- untuk opsi Aktif --}}
      >Aktif</option>
    <option value="0" {{ (string) old('aktif', $promo->aktif) === '0' ? 'selected' : '' }}   {{-- untuk opsi Nonaktif --}}
      >Nonaktif</option>
  </select>
  @error('aktif') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

      <div class="d-flex gap-2">
        <button type="submit" class="primary-btn">Perbarui</button>
        <a href="{{ route('admin.promo.index') }}" class="btn btn-light border">Batal</a>
      </div>
    </form>
  </div>

</main>

{{-- end section  --}}

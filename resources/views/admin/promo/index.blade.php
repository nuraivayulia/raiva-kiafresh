@extends('layouts.admin.app')

@section('content')

{{-- start konten  --}}
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

  <div class="page-header">
    <div>
      <h1>Daftar Promo</h1>
      <p>Kelola data promo Kia Fresh Laundry</p>
    </div>
    <a href="{{ route('admin.promo.create') }}" class="primary-btn">Tambah Promo</a>
  </div>

  <div class="summary-card">
    <div class="table-responsive">
      <table class="table align-middle mb-0">
        <thead>
          <tr>
            <th>#</th>
            <th>Kode Promo</th>
            <th>Diskon (%)</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
  @forelse ($promos as $p)
    <tr>
      <td>{{ $promos->firstItem() + $loop->index }}</td>
      <td>{{ $p->kode }}</td>
      <td>{{ $p->diskon_persen }}%</td>
      <td>{{ $p->aktif ? 'Aktif' : 'Nonaktif' }}</td>
      <td>
        <a href="{{ route('admin.promo.edit', $p) }}" class="btn btn-sm btn-light border">Edit</a>
        <form action="{{ route('admin.promo.destroy', $p) }}" method="POST" class="d-inline"
              onsubmit="return confirm('Hapus data ini?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
  @empty
    <tr><td colspan="5" class="text-center text-muted">Belum ada data promo.</td></tr>
  @endforelse
</tbody>
      </table>
    </div>

    <div class="mt-3">
      {{ $promos->links() }}
    </div>
  </div>

</main>
{{-- end content  --}}

@endsection

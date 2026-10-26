@extends('layouts.admin.app')

@section('content')
    <div class="page-header">
        <div>
            <h1>Daftar Layanan</h1>
            <p>Kelola data layanan Kia Fresh Laundry</p>
        </div>
        <a href="{{ route('admin.layanan.create') }}" class="primary-btn">Tambah Layanan</a>
    </div>

    <div class="summary-card">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Layanan</th>
                        <th>Harga per Kg (Rp)</th>
                        <th>Estimasi (hari)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($layanans as $l)
                        <tr>
                            <td>{{ $layanans->firstItem() + $loop->index }}</td>
                            <td>{{ $l->nama_layanan }}</td>
                            <td>Rp {{ number_format($l->harga_per_kg, 0, ',', '.') }}</td>
                            <td>{{ $l->estimasi_hari }} hari</td>
                            <td>
                                <a href="{{ route('admin.layanan.edit', $l) }}" class="btn btn-sm btn-light border">Edit</a>
                                <form action="{{ route('admin.layanan.destroy', $l) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada data layanan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $layanans->links() }}
        </div>
    </div>
@endsection

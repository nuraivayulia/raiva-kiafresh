<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kia Fresh Laundry | Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

  <style>
    :root {
      --bg: #f4f7fb;
      --panel: #ffffff;
      --line: #e6edf5;
      --text: #1f2937;
      --muted: #64748b;
      --primary: #2563eb;
      --primary-soft: #e8f0ff;
      --success: #16a34a;
      --warning: #f59e0b;
      --danger: #ef4444;
      --info: #0ea5e9;
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: var(--bg);
      color: var(--text);
      min-height: 100vh;
    }

    a { text-decoration: none; }

    .app-shell {
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: 250px;
      background: #fff;
      border-right: 1px solid var(--line);
      padding: 18px 14px;
      position: sticky;
      top: 0;
      height: 100vh;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 10px 12px 14px;
      border-bottom: 1px solid var(--line);
      margin-bottom: 18px;
      font-weight: 700;
    }

    .brand-mark {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      overflow: hidden;
      background: #fff;
      display: grid;
      place-items: center;
      box-shadow: 0 6px 12px rgba(37, 99, 235, 0.18);
      border: 1px solid var(--line);
      flex-shrink: 0;
    }

    .brand-mark img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .nav-group {
      margin-top: 10px;
    }

    .nav-label {
      display: block;
      padding: 10px 12px 6px;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--muted);
    }

    .nav-menu {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .nav-item a {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #2d3748;
      padding: 11px 12px;
      border-radius: 10px;
      font-weight: 500;
      transition: 0.2s ease;
    }

    .nav-item a:hover,
    .nav-item.active a {
      background: var(--primary-soft);
      color: var(--primary);
    }

    .nav-item i {
      width: 18px;
      font-size: 18px;
      text-align: center;
    }

    .main-panel {
      flex: 1;
      min-width: 0;
    }

    .topbar {
      position: sticky;
      top: 0;
      z-index: 20;
      height: 70px;
      background: rgba(255,255,255,0.92);
      backdrop-filter: blur(8px);
      border-bottom: 1px solid var(--line);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 24px;
    }

    .topbar-left {
      display: flex;
      align-items: center;
      gap: 12px;
      color: var(--muted);
      font-size: 13px;
    }

    .address-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 12px;
      border-radius: 999px;
      border: 1px solid var(--line);
      background: #fff;
      color: var(--muted);
    }

    .topbar-tools {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .tool-btn {
      position: relative;
      width: 38px;
      height: 38px;
      border: 1px solid var(--line);
      background: #fff;
      border-radius: 50%;
      display: grid;
      place-items: center;
      color: var(--text);
    }

    .tool-btn .badge-count {
      position: absolute;
      top: -4px;
      right: -4px;
      min-width: 18px;
      height: 18px;
      border-radius: 999px;
      background: var(--danger);
      color: #fff;
      font-size: 10px;
      display: grid;
      place-items: center;
      border: 2px solid #fff;
      font-weight: 700;
    }

    .avatar {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: linear-gradient(135deg, #cfe1ff, #9ec5fe);
      display: grid;
      place-items: center;
      color: #1d4ed8;
      font-weight: 700;
      box-shadow: 0 6px 12px rgba(37, 99, 235, 0.18);
    }

    .content {
      padding: 28px;
    }

    .page-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      margin-bottom: 22px;
    }

    .page-header h1 {
      font-size: 2.1rem;
      margin: 0;
      font-weight: 800;
      letter-spacing: -0.04em;
    }

    .page-header p {
      margin: 6px 0 0;
      color: var(--muted);
      font-size: 1rem;
    }

    .primary-btn {
      border: none;
      background: var(--primary);
      color: #fff;
      border-radius: 10px;
      padding: 10px 16px;
      font-weight: 600;
      box-shadow: 0 10px 18px rgba(37, 99, 235, 0.2);
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 18px;
      margin-bottom: 20px;
    }

    .stat-card {
      background: var(--panel);
      border: 1px solid var(--line);
      border-radius: 16px;
      padding: 20px;
      box-shadow: 0 10px 24px rgba(15, 23, 42, 0.03);
    }

    .stat-inner {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .stat-icon {
      width: 54px;
      height: 54px;
      border-radius: 14px;
      display: grid;
      place-items: center;
      color: #fff;
      font-size: 24px;
      flex-shrink: 0;
    }

    .bg-blue { background: linear-gradient(135deg, #3b82f6, #2563eb); }
    .bg-green { background: linear-gradient(135deg, #22c55e, #16a34a); }
    .bg-cyan { background: linear-gradient(135deg, #06b6d4, #0ea5e9); }
    .bg-yellow { background: linear-gradient(135deg, #fbbf24, #f59e0b); }

    .stat-card h2 {
      margin: 0 0 8px;
      font-size: 0.83rem;
      color: var(--muted);
      font-weight: 600;
    }

    .stat-card h3 {
      margin: 0 0 6px;
      font-size: clamp(1.6rem, 2vw, 2.1rem);
      font-weight: 800;
      letter-spacing: -0.04em;
    }

    .stat-card p {
      margin: 0;
      font-size: 0.8rem;
      font-weight: 600;
    }

    .text-success-strong { color: var(--success); }
    .text-info-strong { color: var(--info); }
    .text-warning-strong { color: #b45309; }

    .summary-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 18px;
    }

    .summary-card {
      background: var(--panel);
      border: 1px solid var(--line);
      border-radius: 16px;
      padding: 20px;
      box-shadow: 0 10px 24px rgba(15, 23, 42, 0.03);
    }

    .summary-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding-bottom: 16px;
      border-bottom: 1px solid var(--line);
      margin-bottom: 18px;
    }

    .summary-header h3 {
      margin: 0;
      font-size: clamp(1.7rem, 2vw, 2.2rem);
      font-weight: 800;
      letter-spacing: -0.04em;
    }

    .summary-header span {
      color: var(--muted);
      font-weight: 500;
    }

    .summary-icon {
      width: 46px;
      height: 46px;
      border-radius: 12px;
      display: grid;
      place-items: center;
      font-size: 22px;
      color: #fff;
    }

    .summary-meta {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      color: var(--muted);
      font-size: 0.9rem;
    }

    .summary-meta a {
      color: var(--primary);
      font-weight: 700;
    }

    @media (max-width: 1100px) {
      .stats-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .summary-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 860px) {
      .app-shell {
        display: block;
      }

      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
        border-right: none;
        border-bottom: 1px solid var(--line);
      }

      .nav-menu {
        display: grid;
        grid-template-columns: repeat(2, minmax(140px, 1fr));
      }

      .content {
        padding: 20px 18px 36px;
      }
    }

    @media (max-width: 600px) {
      .stats-grid {
        grid-template-columns: 1fr;
      }

      .page-header {
        flex-direction: column;
        align-items: flex-start;
      }

      .topbar {
        padding: 0 16px;
      }

      .address-pill {
        display: none;
      }
    }
  </style>
</head>

<body>
  <div class="app-shell">
    <aside class="sidebar">
      <div class="brand">
        <div class="brand-mark">
          <img src="{{ asset('assets admin/images/kiafresh-logo.png') }}" alt="Kia Fresh Laundry logo">
        </div>
        <div>Kia Fresh Laundry</div>
      </div>

      <div class="nav-group">
        <span class="nav-label">Main</span>
        <ul class="nav-menu">
<li class="nav-item"><a href="{{ route('admin.dashboard') }}"><i class="ti ti-home"></i><span>Dashboard</span></a></li>
<li class="nav-item"><a href="{{ route('admin.pelanggan.index') }}"><i class="ti ti-users"></i><span>Pelanggan</span></a></li>
<li class="nav-item"><a href="{{ route('admin.layanan.index') }}"><i class="ti ti-wash-machine"></i><span>Layanan</span></a></li>
<li class="nav-item"><a href="{{ route('admin.promo.index') }}"><i class="ti ti-discount"></i><span>Promo</span></a></li>
        </ul>
      </div>

      <div class="nav-group">
        <span class="nav-label">Account</span>
        <ul class="nav-menu">
          <li class="nav-item"><a href="#"><i class="ti ti-login"></i><span>Log in</span></a></li>
          <li class="nav-item"><a href="#"><i class="ti ti-user-plus"></i><span>Sign up</span></a></li>
        </ul>
      </div>
    </aside>

    <div class="main-panel">
      <nav class="topbar">
        <div class="topbar-left">
          <span class="address-pill"><i class="ti ti-world"></i> 127.0.0.1:8000/admin</span>
        </div>

        <div class="topbar-tools">
          <button class="tool-btn" type="button" aria-label="notifications">
            <i class="ti ti-bell"></i>
            <span class="badge-count">2</span>
          </button>
          <button class="tool-btn" type="button" aria-label="settings">
            <i class="ti ti-settings"></i>
          </button>
          <div class="avatar" aria-label="user profile">A</div>
        </div>
      </nav>

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
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

{{-- start sidebar --}}
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
      {{-- Dashboard --}}
      <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a href="{{ route('admin.dashboard') }}"><i class="ti ti-home"></i><span>Dashboard</span></a>
      </li>

      {{-- Pelanggan --}}
      <li class="nav-item {{ request()->routeIs('admin.pelanggan.*') ? 'active' : '' }}">
        <a href="{{ route('admin.pelanggan.index') }}"><i class="ti ti-users"></i><span>Pelanggan</span></a>
      </li>

      {{-- Layanan --}}
      <li class="nav-item {{ request()->routeIs('admin.layanan.*') ? 'active' : '' }}">
        <a href="{{ route('admin.layanan.index') }}"><i class="ti ti-wash-machine"></i><span>Layanan</span></a>
      </li>

      {{-- Promo --}}
      <li class="nav-item {{ request()->routeIs('admin.promo.*') ? 'active' : '' }}">
        <a href="{{ route('admin.promo.index') }}"><i class="ti ti-discount"></i><span>Promo</span></a>
      </li>
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
{{-- end sidebar --}}
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{-- <div class="sidebar-brand-icon rotate-n-15"></div> --}}
        <div class="sidebar-brand-text mx-3">POLIBAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ 'dashboard' == request()->path() ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
        
    @if (Auth::user()->role == 'admin')
    <!-- Nav Item - Input RPS -->
    <li class="nav-item {{ 'input' == request()->path() ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('input') }}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Input RPS</span></a>
    </li>
    @endif

    @if (Auth::user()->role == 'kaprodi')
    <!-- Nav Item - Pengesahan -->
    <li class="nav-item {{ 'pengesahan' == request()->path() ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('pengesahan') }}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Pengesahan</span></a>
    </li>
    @endif

    @if (Auth::user()->role == 'kajur')
    <!-- Nav Item - Monitoring -->
    <li class="nav-item {{ 'monitoring' == request()->path() ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('monitoring') }}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Monitoring</span></a>
    </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
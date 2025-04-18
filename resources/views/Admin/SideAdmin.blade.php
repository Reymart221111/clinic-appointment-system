<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-3">
    <div class="user-panel mt-4 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
            <img src="{{ asset('storage/' . Auth::user()->image_path) }}" class="img-circle elevation-2 border"
                alt="User Image">
        </div>
        <div class="info pl-2">
            <a href="#" class="d-block text-white font-weight-bold">{{ Auth::user()->name }}</a>
            <small class="text-muted">{{ ucfirst(Auth::user()->role) }}</small>
        </div>
    </div>

    <a class="sidebar-brand d-flex align-items-center justify-content-center py-3 text-white" href="index.html">
        <div class="sidebar-brand-icon rotate-n-20">
            <i class="fas fa-laugh-wink fa-2x text-gray-300"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ ucfirst(Auth::user()->role) }}</div>
    </a>

    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <li class="nav-item active">
            <a class="nav-link {{ isActive([$rolePrefix . 'dashboard']) }}"
                href="{{ route($rolePrefix . 'dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComponents"
                aria-expanded="false" aria-controls="collapseComponents">
                <i class="fas fa-fw fa-cog"></i>
                <span>Components</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="false" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Utilities</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="false" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span>
            </a>
        </li>
    </ul>
</aside>
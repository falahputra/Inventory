<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/product">
                <span data-feather="file-text"></span>
                Barang Masuk
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/product">
                <span data-feather="file-text"></span>
                Barang Keluar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="/dashboard/product">
                <span data-feather="file-text"></span>
                Produk
                </a>
            </li>
        </ul>

        {{-- @can('admin') --}}
            
        <h6 class="sidebar-heading d-flex justify-conten-between align-items-center px-3 mt-4 mb-1">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                <span data-feather="grid"></span>
                History Perpindahan Barang
                </a>
            </li>
        </ul>

        {{-- @endcan --}}

    </div>
</nav>
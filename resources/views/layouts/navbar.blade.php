<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Sistem Informasi inventory</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        {{-- <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ ($title==='Home') ? 'active' : ''}}"  href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title==='About') ? 'active' : ''}}" href="/about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title==='All Posts') ? 'active' : ''}}" href="/posts">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title==='Post Categories') ? 'active' : ''}}" href="/categories">Categories</a>
                </li>
        </ul> --}}

        <ul class="navbar-nav ms-auto">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"> <i class="bi bi-layout-text-window"></i> My Dashboard</a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-in-right"></i>  Logout
                                </button>

                            </form>
                            {{-- <a class="dropdown-item" href="#"> 

                                <i class="bi bi-box-arrow-in-right"></i>  Logout
                            </a> --}}
                        </li>
                    </ul>
                </li>
            @else
                {{-- <li class="nav-item">
                    <a href="/" class="nav-link {{ ($title==='Login') ? 'active' : ''}}"> <i class="bi bi-box-arrow-in-right"></i>  Login</a>
                </li> --}}
            @endauth
        </ul>

        </div>
    </div>
</nav>
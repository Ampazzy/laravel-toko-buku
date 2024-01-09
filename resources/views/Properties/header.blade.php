<nav class="navbar bg-info navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('storage/logo/logo_buku.png') }}" alt="Logo" width="30" height="24"
                class="d-inline-block align-text-top">
            Yuk kita literasi
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/books">Daftar Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/categories">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/admin/books">Kelola Buku</a>
                </li>
            </ul>
        </div>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="dropdown-item">Logout</button>
        </form>

    </div>
</nav>

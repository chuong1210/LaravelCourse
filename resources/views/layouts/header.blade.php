{{-- HEADER --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">MyShop</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" class="{{ request()->is("/") ? 'active' : '' }}"
                        href="/">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/products"
                        class="{{ request()->is("/") ? 'active' : '' }}">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="#about"
                        class="{{ request()->is("/") ? 'active' : '' }}">About</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg orange bg-info" style="--bs-bg-opacity: .8;">
    <div class="container">
        <a class="navbar-brand" href="/">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse container-fluid" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'posts' ? 'active' : '' }}" href="/posts">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
            </ul>
            <ul class="navbar-nav my-auto ms-auto">
                <form action="/posts"  class="d-flex">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <input class="form-control me-2 d-inline" type="input" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary d-inline" type="submit">Search</button>
                </form>
                <li class="nav-item" style="margin-left: 50px;">
                    <a class="nav-link  {{ $active == 'login' ? 'active' : '' }}" href="/login"><i class="bi bi-person px-2"></i>Login</a>
                </li>

            </ul>
            {{-- <ul class="navbar-nav ms-auto">
            </ul> --}}
        </div>
    </div>
</nav>

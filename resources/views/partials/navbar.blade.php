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
        </div>
        <form action="/posts" class="d-flex col-md-4">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <input class="form-control me-2" type="input" placeholder="Search.." name="search"
                value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
    </div>
</nav>

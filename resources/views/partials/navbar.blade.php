<nav class="navbar navbar-expand-lg orange bg-info" style="--bs-bg-opacity: .8;">
    <div class="container">
        <a class="navbar-brand" href="/">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title == "Home") ? "active" : "" }}"  href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::url() == "http://belajar-laravel.test/blog") ? "active" : "" }}" href="/blog">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title == "About") ? "active" : "" }}" href="/about">About</a>
                </li>
               
            </ul>
        </div>
    </div>
</nav>
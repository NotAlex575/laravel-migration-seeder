<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container py-3">

            <a class="navbar-brand fs-3 fw-semibold" href="{{ "homepage" }}">
                @yield("title")
            </a>

            <!-- Bottone hamburger per mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu di navigazione -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ "homepage" }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ "trainList" }}">Lista treni</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>

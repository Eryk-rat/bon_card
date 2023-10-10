<nav class="navbar">
    <div class="container">

        <div class="heder-navbar">
            <a class="navbar-brand" href="{{ route('cards.index') }}">Menu</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <button class="btn btn-link nav-link" onclick="window.location.href='{{ route('cards.index') }}'">
                    <li class="nav-item">
                        Lista kart
                    </li>
                </button>
                <button class="btn btn-link nav-link" onclick="window.location.href='{{ route('cards.create') }}'">
                    <li class="nav-item">
                    Dodaj kartę
                    </li>
                </button>
            </ul>
        </div>
    </div>
</nav>

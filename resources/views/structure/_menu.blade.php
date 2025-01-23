<nav class="navbar navbar-expand-md navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="/">
        <img src="/img/pallasso.png" width="30" height="auto" class="align-top">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">Inici</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">Contacta'ns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
        </ul>
    </div>
</nav>

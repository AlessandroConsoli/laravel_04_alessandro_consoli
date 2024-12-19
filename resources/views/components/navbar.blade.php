<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid navbar_custom">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route('welcome_page')}}">Home</a>
                <a class="nav-link" href="{{route('products_list')}}">Articoli</a>
            </div>
        </div>
    </div>
</nav>
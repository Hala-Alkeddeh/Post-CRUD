<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/app.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class=" min-vh-100 d-flex flex-column justify-content-between">
            <nav
            class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand fs-4" href="/"><span class="text-warning">B</span>LOG</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavId">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Posts</a>
                        </li>
                    </ul>
                    <div>
                        <a href="/add" class="btn btn-success">Add post</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="container flex flex-col content">
            @yield('content')
        </div>
        <footer class="bg-body-tertiary bg-light text-center text-lg-start">
            <div class="text-center p-3">
            © 2024 Copyright
            <a class="navbar-brand" href="/"><span class="text-warning">B</span>LOG</a>
            </div>
        </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
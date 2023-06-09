<!doctype html>
<html lang="lv">

<head>
    <meta charset="utf-8">
    <title>PD2 - {{ $title }}</title>
    <meta name="description" content="Tīmekļu Tehnoloģiju 2. praktiskais darbs">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous">
</head>

    <body>

        <nav class="navbar navbar-expand-md bg-primary mb-3" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand mb-0 h1">PD2</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarNav">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Sākumlapa</a>
                        </li>

                        @if(Auth::check())

                        <li class="nav-item">
                            <a class="nav-link" href="/authors">Autori</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Beigt darbu</a>
                        </li>

                        @else

                        <li class="nav-item">
                            <a class="nav-link" href="/login">Pieslēgties</a>
                        </li>

                        @endif


                    </ul>
                </div>
             </div>
        </nav>

        <main class="container">
            <div class="row">
                <div class="col">

                    @yield('content')

                </div>
            </div>
        </main>
    
        <footer class="text-bg-dark mt-3">
            <div class="container">
                <div class="row py-5">
                    <div class="col">
                        R.R.Mālītis, 2023
                    </div>
                </div>
            </div>
        </footer>
        <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
        crossorigin="anonymous"></script>
    <script src="./js/admin.js"></script>
    </body>

</html>
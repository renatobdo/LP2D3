<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- css do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- css do google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- css da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/script.js"></script>
</head>

<body>
    <!--<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="img/logo-ifsp-removebg.png" alt="ifsp eventos">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link"> Eventos </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link"> Criar eventos </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link"> Entrar </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link"> Cadastrar </a>
                    </li>
                </ul>
            </div>
        </nav>
</header> -->
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo-ifsp-removebg.png" alt="ifsp eventos" class="header-image ml-0">
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/eventos" class="nav-link mx-2">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="events/create" class="nav-link mx-2">Criar eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link mx-2">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link mx-2">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">{{ session('msg')}}</p>
                @endif
            </div>
        </div>
    </main>
    @yield('content')
    <div class="container-fluid">

        <footer class="d-flex flex-wrap py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">IFSP &copy; 2023 </p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Início</a>

                </li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Instituto</a>

                </li>

                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a>

                </li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Sobre</a>

                </li>

            </ul>
            <div class="ms-auto custom-green-icons">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-github"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
            
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </div>



</body>

</html>
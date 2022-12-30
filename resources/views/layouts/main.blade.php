<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        
        <!-- Style -->
        <link href="{{ url('/css/style.css') }}" rel="stylesheet"> 
        
    </head>
    <body>
        <header>
            <div class="center">
                <div class="wraper-header">
                    <div class="logo">
                        <h2>Logo</h2>
                    </div>
                    <div class="navbar">                        
                        <ul class="links-navbar">
                            <li><a href="{{ url('/noticias/create/') }}" title="Cadastrar Notícia">Cadastrar Notícia</a></li>
                            <li><a href="{{ url('/') }}" title="Exibir Notícias">Exibir Notícias</a></li>                            
                            <li class="search-bar">
                                <form action='{{ url("/noticias/busca/") }}' method="post">
                                    @csrf
                                    <input type="text" name="search" id="search" placeholder="Título ou categoria"><button type="submit>"<i class="fas fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-mobile">                        
                        <ul class="links-navbar">
                            <li class="search-bar">
                                <form action='{{ url("/noticias/busca/") }}' method="post">
                                    @csrf
                                    <input type="text" name="search" id="search" placeholder="Título ou categoria"><button type="submit>"<i class="fas fa-search"></i></button>
                                </form>
                            </li>
                            <li><a href="{{ url('/noticias/create/') }}" title="Cadastrar Notícia">Cadastrar Notícia</a></li>
                            <li><a href="{{ url('/') }}" title="Exibir Notícias">Exibir Notícias</a></li>                                                        
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')
        <footer>
            <p>Desenvolvido por Suzane Machado</p>
        </footer>
    </body>
</html>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title><?=$title?></title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="{{ asset('images/logo-shop-toys.png')  }}" alt="Логотип" width="100">
            </a>
        </div>

        <nav>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('main.index')  }}" class="nav-link px-2 link-success">Главная</a></li>
                <li><a href="{{ route('products.index')  }}" class="nav-link px-2 link-success">Каталог продукции</a></li>
                <li><a href="{{ route('contacts.index') }}" class="nav-link px-2 link-success">Контакты</a></li>
                <li><a href="{{ route('about-us.index')  }}" class="nav-link px-2 link-success">О нас</a></li>
            </ul>
        </nav>

            @guest
                <nav class="col-md-3 text-end">
                    @if (Route::has('login'))
                        <a class="btn btn-outline-success me-2" href="{{ route('login') }}">Войти</a>
                    @endif

                    @if (Route::has('register'))
                            <a class="btn btn-success" href="{{ route('register') }}">Зарегистрироваться</a>
                    @endif
                </nav>
            @else
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Здравствуйте, {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('cart.index')  }}">Корзина</a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Выйти
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            @endguest
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">© 2024 Детский мир</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="{{ asset('images/logo-shop-toys.png')  }}" alt="Логотип" width="100">
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li><a href="{{ route('main.index')  }}" class="nav-link px-2 link-success">Главная</a></li>
            <li><a href="{{ route('products.index')  }}" class="nav-link px-2 link-success">Каталог продукции</a></li>
            <li><a href="{{ route('contacts.index') }}" class="nav-link px-2 link-success">Контакты</a></li>
            <li><a href="{{ route('about-us.index')  }}" class="nav-link px-2 link-success">О нас</a></li>
        </ul>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

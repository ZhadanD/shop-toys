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
                <li><a href="#" class="nav-link px-2 link-success">Контакты</a></li>
                <li><a href="{{ route('about-us.index')  }}" class="nav-link px-2 link-success">О нас</a></li>
            </ul>
        </nav>

        <nav class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-success me-2">Войти</button>
            <button type="button" class="btn btn-success">Зарегистрироваться</button>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>
</div>
</body>
</html>

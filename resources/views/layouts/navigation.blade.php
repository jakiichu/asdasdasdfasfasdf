<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/static.css">
</head>

<body>
    <div class="navigation">
        <nav>
            <a href="/" class="logo"><img href="#" src="/images/logo/logo.png" alt=""></a>
            <a class="menu main-item" href="javascript:void(0);" tabindex="1"><img class="menu"
                    src="/images/content/меню.png" alt=""></a>
            <div class="sub-menu">
                <a href="/"><img class="logo" href="#" src="/images/logo/logo2.png" alt=""></a>
                <a class="navigationPlate navigationPlate1" href="/product">Товары</a>
                <a class="navigationPlate navigationPlate2" href="#2">подпункт 2</a>
                <a class="navigationPlate navigationPlate3" href="#3">подпункт 3</a>
            </div>
        </nav>
        <nav class="nav2">
            @guest
                @if (Route::has('login'))
                    <p><a href="{{ route('login') }}">{{ __('Авторизация') }}</a></p>
                @endif
                @if (Route::has('register'))
                    <p><a href="{{ route('register') }}">{{ __('Регистрация') }}</a></p>
                @endif
            @else
                <p><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        v-pre>{{ Auth::user()->name }}</a></p>
                <p><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Выйти') }}</a></p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            @endguest
            <p><a href="/cart">Корзина</a></a>
        </nav>
    </div>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>

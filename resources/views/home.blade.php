<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ Vite::asset('resources/images/2.png') }}" alt="Логотип">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('array') }}">Массивы</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="content">
            <h1>Сайтик</h1>
            <img src="{{ Vite::asset('resources/images/1.png') }}" alt="Основная картинка">
            <p>
                Привет,привет,привет,привет,привет,привет,привет,привет,привет,привет,привет,привет,привет,привет,привет,привет,привет,привет,привет,пока.
            </p>
        </section>
    </main>

    <footer>
        <p>&copy; Сафин Юрий Ринатович, {{ date('Y') }}</p>
    </footer>
</body>
</html>
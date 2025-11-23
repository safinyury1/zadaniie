<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы товаров</title>
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
        <h1>Наши товары</h1>
        <div class="products-grid">
            @foreach($array as $product)
            <div class="product-card">
                <img src="{{ Vite::asset('resources/images/' . $product['path']) }}" alt="{{ $product['title'] }}">
                <h3>{{ $product['title'] }}</h3>
                <p class="price">{{ $product['price'] }} руб.</p>
            </div>
            @endforeach
        </div>
    </main>

    <footer>
        <p>&copy; Сафин Юрий Ринатович, {{ date('Y') }}</p>
    </footer>
</body>
</html>
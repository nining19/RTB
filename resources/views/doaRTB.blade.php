<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Road to Bhakti')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>DOA</title>
</head>
<body>
    <header>
        <div class="search-bar">
            <input type="text" placeholder="Telusuri" />
            <button type="submit">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </header>

    <main class="container-doa">
        @yield('content')
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

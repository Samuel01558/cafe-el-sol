<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café del Sol</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header, footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }
        main {
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            font-size: 30px;
            
        }
        h1 { color: #ffd700; }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        li {
            list-style: none;
            font-size: 30px;
        }
        h2 {
            font-size: 40px
        }
        h1 {
            font-size: 60px;
        }
        footer {
            display: inline-block;
            width: 100%;
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Café del Sol</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('menu') }}">Menú</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Café del Sol. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
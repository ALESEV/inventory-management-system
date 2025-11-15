<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <h1>Inventory Management System</h1>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('contacts') }}">Contacts</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield("main")
    </main>
</body>
</html>
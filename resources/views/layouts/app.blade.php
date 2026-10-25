
<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Erik Maulana Hardianto | Backend Developer</title>

    <meta
        name="description"
        content="Portofolio Erik Maulana Hardianto, Backend Developer yang berfokus pada PHP, Laravel, dan MySQL."
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800 antialiased">
    @yield('content')
</body>
</html>

<!DOCTYPE html>
<html lang="{{ $lang }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Erik Maulana Hardianto | Junior Web Developer</title>

    <meta
        name="description"
        content="Portofolio Erik Maulana Hardianto, Junior Web Developer yang memiliki minat dan fokus di bidang Back-End Development">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800 antialiased">
    @yield('content')
</body>

</html>
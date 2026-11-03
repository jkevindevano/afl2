<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Findora personal shopping dan jasa titip. Discover more, shop easier.')">

    <title>@yield('title', 'Findora')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    @include('navbar')

    <main>
        @yield('main_content')
    </main>

    @include('footer')

</body>

</html>

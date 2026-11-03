<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>@yield("title")</title>
</head>

<body>

    @include('navbar')

    <main>
        @yield('main_content')
    </main>

    @include('footer')

</body>

</html>

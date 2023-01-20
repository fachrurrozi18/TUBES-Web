<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">

    <!-- Navbar CSS -->
    <link rel="stylesheet" href="/css/navbar.css">

    @yield('style')

    <!-- Footer CSS -->
    <link rel="stylesheet" href="/css/footer.css">

    <title>HMIK | {{ $title }}</title>
</head>
    
<body>

    @include('partials.navbar')

    <div class="container mt-4">
      @yield('container')
    </div>

    @include('partials.footer')
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    @include('Layout.Head')
</head>
<body>

    {{-- Un header Commun --}}
    @include('Layout.Header')
    {{-- Un main différent --}}
    <main>
        @yield('LeContenuDeMaPage')
    </main>
    {{-- Un footer commun --}}
    @include('Layout.Footer')

</body>
</html>
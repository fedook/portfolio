<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>@yield('title', 'Product Management System')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        padding-top: 70px;
        background: #575a68;
    }

    header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1050;
    }

    main {
        flex: 1;
    }
</style>

</head>

<body>

@include('partials.header')

<main class="container mt-4">
    @yield('content')
</main>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
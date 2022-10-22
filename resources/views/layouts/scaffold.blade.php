<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE</title>
    @include('includes.style')
    @stack('styles')
</head>
<body class="">
    @include('includes.nav')
    @yield('content')
    @include('includes.script')
    @stack('scripts')
</body>
</html>

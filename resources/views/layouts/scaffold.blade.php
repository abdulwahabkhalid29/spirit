<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>srtdash - ICO Dashboard</title>
    @include('includes.style')
    @stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('includes.nav')
    @include('includes.left_nav')
    @yield('content')
    @include('includes.script')
    @stack('scripts')
</body>
</html>

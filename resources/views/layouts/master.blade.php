<!DOCTYPE html>
<html>
<head>
    <title>Invoice Application</title>
    <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/override.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
    @stack('scripts')
</html>
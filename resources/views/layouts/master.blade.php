<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <title>@yield("title")</title>
</head>
<body class="d-flex flex-column min-vh-100">
    @include("partials/header")
    @yield("main")
    @include("partials/footer")
</body>
</html>
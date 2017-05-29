<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $titulo or 'ACL Laravel' }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <!--<link rel="stylesheet" href="css/main.css"> -->
</head>
<body>
<header id="header">
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ url('/painel/users/') }}">Users</a></li>
                <li><a href="badges.html">Posts</a></li>
                <li><a href="{{ url('/painel/roles/') }}">Roles</a></li>
                <li><a href="{{ url('/painel/permissions/') }}">Permissions</a></li>
            </ul>
        </div>
    </nav>
</header>
<main id="principal">
    @yield('content')
</main>
<footer id="footer">

</footer>
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/materialize.min.js') }}"></script>
</body>
</html>
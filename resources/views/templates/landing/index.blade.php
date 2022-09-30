<!DOCTYPE HTML>
<html>

<head>
    <title>Templeta para Escolas 2</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/public/storage/css/css.css">
    <link rel="stylesheet" href="/public/assets/landing/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="/public/assets/landing//css/noscript.css" /></noscript>
</head>

<body class="is-preload">

    <!-- Header -->
    <header id="header">
        <nav>
            <ul>
                @foreach ($configs->structure as $menu)
                <li><a href="#{{ $menu->alias }}"   >{{$menu->name }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>

    @foreach ($configs->structure as $index => $page)

        @switch($page->type)

            @case('intro')
                <x-intro
                    :index="$index"
                    :page="$page"
                    :configs="$configs"
                    />
                @break

            @case('content')
                <x-content
                    :index="$index"
                    :page="$page"
                    :configs="$configs"
                    />
                @break

            @case('galery')
                <x-galery
                    :index="$index"
                    :page="$page"
                    :configs="$configs"
                    />
                @break

            @default

        @endswitch

    @endforeach

    <!-- Footer -->
    <x-base.footer :configs="$configs" />



    <!-- Scripts -->
    <script src="/public/assets/landing/js/jquery.min.js"></script>
    <script src="/public/assets/landing/js/jquery.poptrox.min.js"></script>
    <script src="/public/assets/landing/js/jquery.scrolly.min.js"></script>
    <script src="/public/assets/landing/js/jquery.scrollex.min.js"></script>
    <script src="/public/assets/landing/js/browser.min.js"></script>
    <script src="/public/assets/landing/js/breakpoints.min.js"></script>
    <script src="/public/assets/landing/js/util.js"></script>
    <script src="/public/assets/landing/js/main.js"></script>

</body>

</html>

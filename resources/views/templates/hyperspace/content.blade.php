@extends('layouts.default')


@section("head")
		<link rel="stylesheet" href="/public/assets/hype/css/main.css" />
		<link rel="stylesheet" href="/public/storage/css/css.css" />
		<noscript><link rel="stylesheet" href="/public/assets/hype/css/noscript.css" /></noscript>
@endsection

@section("content")
<body class="is-preload">

    <header id="header">
        <a href="/" class="title">{{ ___("institutional.title", $configs) }}</a>
        <nav>
            <ul>
                @foreach ($configs->structure as $menu)
                    @continue($menu->title == "Home")
                    <li><a href="/{{ $menu->alias }}">{{ $menu->title }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>

    <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
                <section id="main" class="wrapper">
                    <div class="inner">
                        <h1 class="major">{{ ___("title", $content) }}</h1>
                        <p class="subtitle">{{ ___("subtitle", $content) }}</p>
                        @switch($content->type)
                        @case('content')
                            <x-content :content="$content" />
                            @break

                        @case('gallery')
                            <x-gallery :content="$content" />
                            @break

                        @case('gallery')
                            <x-calendar :content="$content" />
                            @break

                        @case('grid')
                            <x-grid :content="$content" />
                            @break

                        @case('contact')
                            <x-contact :content="$content" />
                            @break


                        @endswitch

                    </div>
                </section>

        </div>

        <x-base.footer :configs="$configs" />

    <!-- Scripts -->
    <script src="/public/assets/hype/js/jquery.min.js"></script>
    <script src="/public/assets/hype/js/jquery.scrollex.min.js"></script>
    <script src="/public/assets/hype/js/jquery.scrolly.min.js"></script>
    <script src="/public/assets/hype/js/browser.min.js"></script>
    <script src="/public/assets/hype/js/breakpoints.min.js"></script>
    <script src="/public/assets/hype/js/util.js"></script>
    <script src="/public/assets/hype/js/main.js"></script>

	</body>
</html>

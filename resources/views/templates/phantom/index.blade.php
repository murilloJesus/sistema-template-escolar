<!DOCTYPE HTML>
<html>
	<head>
		<title>Template Diferente</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        {!! SEO::generate() !!}
		<link rel="stylesheet" href="/public/storage/css/css.css" />
        <link rel="stylesheet" href="/public/assets/phantom/css/main.css" />
		<link rel="stylesheet" href="/public/assets/phantom/css/lgpd.css" />
		<noscript><link rel="stylesheet" href="/public/assets/phantom/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

			<!-- Header -->
         <!-- Wrapper -->
			<div id="wrapper">


			<x-base.header />

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1 class="header-txt">{{ ___("institutional.title", $configs) }}</h1>
								<p class="header-txt">{{ ___("institutional.subtitle", $configs) }}</p>
							</header>
							<section class="tiles">
                            @foreach ($configs->structure as $page)
                            @continue( $page->title == 'Home')
                                <article class="article-{{ $page->alias }}">
                                    <span class="image">
                                        <img src="/public/assets/phantom/images/pic01.jpg" alt="" />
                                    </span>
                                    <a href="/metodologia">
                                        <h2>{{ $page->title }}</h2>
                                        <div class="content">
                                            <p>{{ $page->subtitle }}</p>
                                        </div>
                                    </a>
                                </article>
                            @endforeach
                            </section>
						</div>
					</div>


                    <x-base.footer :configs="$configs" />


			</div>

		<!-- Scripts -->

			<script src="/public/assets/phantom/js/jquery.min.js"></script>
			<script src="/public/assets/phantom/js/browser.min.js"></script>
			<script src="/public/assets/phantom/js/breakpoints.min.js"></script>
			<script src="/public/assets/phantom/js/util.js"></script>
			<script src="/public/assets/phantom/js/main.js"></script>
			<script src="/public/assets/phantom/js/lgpb.js"></script>


	</body>
</html>

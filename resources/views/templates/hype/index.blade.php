@extends('layouts.default')

@section('head')
		<title>hype</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/public/assets/hype/css/main.css" />
		<noscript><link rel="stylesheet" href="/public/assets/hype/css/noscript.css" /></noscript>
@endsection

@section('content')
	<body class="is-preload">

		<<x-base.header :configs="$configs" />

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Nome da Instituição</h1>
								<img class="img-header" src="/public/assets/hype/images/logo.png" alt="">
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="metodologia.php" class="image"><img src="/public/assets/hype/images/pic01.jpg" alt="" /></a>
							<div class="content">
								<div class="inner">
									<h2>Metodologia Escolar</h2>
									<p>Breve Descrição sobre.</p>
									<ul class="actions">
										<li><a href="/metodologia" class="button">Veja Mais</a></li>
									</ul>
								</div>
							</div>
						</section>

						<section id="galeria">
							<a href="#" class="image"><img src="/public/assets/hype/images/pic02.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Galeria Escolar</h2>
									<p>Frase que Defina os eventos da sua escola.</p>
									<ul class="actions">
										<li><a href="/galeria" class="button">Veja Mais</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section id="projetos">
							<a href="#" class="image"><img src="/public/assets/hype/images/pic03.jpg" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Projetos</h2>
									<p>Acompanhe alguns de nossos projetos.</p>
									<ul class="actions">
										<li><a href="/projetos" class="button">Veja Mais</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>



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

@endsection

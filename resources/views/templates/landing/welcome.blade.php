<!DOCTYPE HTML>
<html>
	<head>
		<title>Templeta para Escolas 2</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/public/assets-land/css/main.css" />
		<noscript><link rel="stylesheet" href="/public/assets-land//css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

        {{ session()->all() }}

		<!-- Header -->
			<header id="header">
				<nav>
					<ul>
                        @foreach ($configs->structure as $menu)
                            <li><a href="#">{{$menu->name }}</a></li>
                        @endforeach
					</ul>
				</nav>
			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2>{{ ___('institutional.name', $configs) }}</h2>
					</header>
					<p>{{ ___('institutional.description', $configs) }}</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Sobre nós</h2>
					</header>
					<p>Descrição Detalhada da escola</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Metodo de Ensino</h2>
					</header>
					<p>Descrição falando sobre toda a metodologia, professores e tecnicas de estudo</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

		<!-- Gallery  -->
		<header>
			<h2 class="text-galery">Eventos De Nossa Instituição</h2>
			<p class="text-galery" >Nome da Escola</p>
		</header>
			<section id="work" class="main style3 primary">


					<section id="container">
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
						<div class="card">
							<img src="/public/assets-land/images/thumbs/01.jpg" alt="">
							<h4><b>Nome do evento Evento</b></h4>
							<p>Breve Descrição</p>
						</div>
					</section>

			</section>


		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="icons">

						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Nome Da Escola</li><li>Design: Leonardo O. Alves <a href="https://html5up.net">HTML5 UP</a></li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="/public/assets-land/js/jquery.min.js"></script>
			<script src="/public/assets-land/js/jquery.poptrox.min.js"></script>
			<script src="/public/assets-land/js/jquery.scrolly.min.js"></script>
			<script src="/public/assets-land/js/jquery.scrollex.min.js"></script>
			<script src="/public/assets-land/js/browser.min.js"></script>
			<script src="/public/assets-land/js/breakpoints.min.js"></script>
			<script src="/public/assets-land/js/util.js"></script>
			<script src="/public/assets-land/js/main.js"></script>

	</body>
</html>

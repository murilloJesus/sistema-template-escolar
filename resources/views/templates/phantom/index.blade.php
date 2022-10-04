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


			<x-base.header :configs="$configs" />

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1 class="header-txt">Nome Da Escola </h1>
								<p class="header-txt">Bordão Da Escola</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="/public/assets/phantom/images/pic01.jpg" alt="" />
									</span>
									<a href="/metodologia">
										<h2>Metodologia de Estudos</h2>
										<div class="content">
											<p>Confira Nossa Metodologia para Estudos</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="/public/assets/phantom/images/pic02.jpg" alt="" />
									</span>
									<a href="/galeria">
										<h2>Galeria</h2>
										<div class="content">
											<p>Veja nossos principais eventos</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="/public/assets/phantom/images/pic03.jpg" alt="" />
									</span>
									<a href="/calendario">
										<h2>Calendario Escolar</h2>
										<div class="content">
											<p>Confira a data de nossos eventos</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="/public/assets/phantom/images/pic04.jpg" alt="" />
									</span>
									<a href="/projetos">
										<h2>Projetos</h2>
										<div class="content">
											<p>Veja nossos principais projetos</p>
										</div>
									</a>
								</article>
								<!-- <article class="style5">
									<span class="image">
										<img src="/public/assets/phantom/images/pic05.jpg" alt="" />
									</span>
									<a href="/contato">
										<h2>Entre em Contato</h2>
										<div class="content">
											<p>Caso tenha alguma duvida entre em contato</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="/public/assets/phantom/images/pic06.jpg" alt="" />
									</span>
									<a href="/trabalhe">
										<h2>Trabalhe Conosco</h2>
										<div class="content">
											<p>encaminhe seu curriculo por aqui</p>
										</div>
									</a>
								</article> -->
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

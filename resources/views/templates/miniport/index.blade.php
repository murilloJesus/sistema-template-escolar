<!DOCTYPE HTML>
<html>
	<head>
		<title>Miniport</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/public/storage/css/css.css" />
		<link rel="stylesheet" href="/public/assets/miniport/css/main.css" />
	</head>
	<body class="is-preload">

		<x-base.header :configs="$configs" />

		<!-- Home -->
			<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="col-4 col-5-large col-12-medium">
							<span class="image fit"><img src="/public/assets/miniport/images/pic00.jpg" alt="" /></span>
						</div>
						<div class="col-8 col-7-large col-12-medium">
							<header>
								<h1 class="txt-header">NOME DA ESCOLA</h1>
							</header>
							<p class="txt-header">Bordão da Escola</p>
		
						</div>
					</div>
				</div>
			</article>

		<!-- Work -->
			<article id="work" class="wrapper style2">
				<div class="container">
					<header>
						<h2 class="txt-header">Sobre a Escola (escola = Nome da escola)</h2>
						<p class="txt-header">Metodologia de ensino (NOME DA ESCOLA)</p>
					</header>
					<div class="row aln-center">
						<div class="col-12 col-12-medium col-12-small">

							<p class="txt-contexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero elit, dignissim vel suscipit vitae, ultricies in lectus. Morbi nisl enim, vulputate non porta eu, congue quis est. Mauris quis turpis rutrum, vestibulum lorem eget, suscipit dolor. Donec lacinia nibh turpis, ac fringilla mauris volutpat nec. Morbi ac malesuada ipsum, ut elementum neque. Nunc suscipit faucibus est et ultrices. Morbi posuere malesuada nunc non blandit. Mauris luctus laoreet pretium. In hac habitasse platea dictumst. Curabitur feugiat rutrum quam vel luctus. Phasellus pellentesque, augue ac suscipit suscipit, dolor neque mollis lacus, vel gravida libero arcu vitae dolor. </p>

						</div>
					</div>
				</div>
			</article>

		<!-- Portfolio -->
			<article id="portfolio" class="wrapper style3">
				<div class="container">
					<header>
						<h2 class="txt-header">Galeria Escolar</h2>
						<p class="txt-header">Frase que Defina nossos eventos escolares.</p>
					</header>
					<div class="row">
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="/public/assets/miniport/images/pic01.jpg" class="image featured" target="_blank"><img src="/public/assets/miniport/images/pic01.jpg" alt="" /></a>
								<h3>Nome do Evento</h3>
								<p>Breve Descrição.</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="#" class="image featured" target="_blank"><img src="/public/assets/miniport/images/pic02.jpg" alt="" /></a>
								<h3>Nome do Evento</h3>
								<p>Breve Descrição.</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="#" class="image featured" target="_blank"><img src="/public/assets/miniport/images/pic03.jpg" alt="" /></a>
								<h3>Nome do Evento</h3>
								<p>Breve Descrição.</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="#" class="image featured" target="_blank"><img src="/public/assets/miniport/images/pic04.jpg" alt="" /></a>
								<h3>Nome do Evento</h3>
								<p>Breve Descrição.</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="#" class="image featured" target="_blank"><img src="/public/assets/miniport/images/pic05.jpg" alt="" /></a>
								<h3>Nome do Evento</h3>
								<p>Breve Descrição.</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="#" class="image featured" target="_blank"><img src="/public/assets/miniport/images/pic06.jpg" alt="" /></a>
								<h3>Nome do Evento</h3>
								<p>Breve Descrição.</p>
							</article>
						</div>
					</div>
				</div>
			</article>

		<!-- Contact -->
			<article id="contact" class="wrapper style4">
				<div class="container medium">
					<header>
						<h2>Entre em Contato</h2>
						<p>Caso tenha alguma duvida você pode estar encainhando uma mensagem por aqui</p>
					</header>
					<div class="row">
						<div class="col-12">
							<form method="post" action="#">
								<div class="row">
									<div class="col-6 col-12-small">
										<input type="text" name="name" id="name" placeholder="Nome" />
									</div>
									<div class="col-6 col-12-small">
										<input type="text" name="email" id="email" placeholder="Email" />
									</div>
									<div class="col-12">
										<textarea name="message" id="message" placeholder="Encaminhe sua Mensagem"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Enviar Mensagem" /></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
						<div class="col-12">
							<hr />
							<h3>Nos Acompanhe nas Redes Sociais</h3>
							<ul class="social">
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-whatsapp"><span class="label">Whatsapp</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								
								<!--
								<li><a href="#" class="icon solid fa-rss"><span>RSS</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span>Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-foursquare"><span>Foursquare</span></a></li>
								<li><a href="#" class="icon brands fa-skype"><span>Skype</span></a></li>
								<li><a href="#" class="icon brands fa-soundcloud"><span>Soundcloud</span></a></li>
								<li><a href="#" class="icon brands fa-youtube"><span>YouTube</span></a></li>
								<li><a href="#" class="icon brands fa-blogger"><span>Blogger</span></a></li>
								<li><a href="#" class="icon brands fa-flickr"><span>Flickr</span></a></li>
								<li><a href="#" class="icon brands fa-vimeo"><span>Vimeo</span></a></li>
								-->
							</ul>
							<hr />
						</div>
					</div>
					<x-base.footer :configs="$configs" />
				</div>
			</article>

		<!-- Scripts -->
			<script src="/public/assets/miniport/js/jquery.min.js"></script>
			<script src="/public/assets/miniport/js/jquery.scrolly.min.js"></script>
			<script src="/public/assets/miniport/js/browser.min.js"></script>
			<script src="/public/assets/miniport/js/breakpoints.min.js"></script>
			<script src="/public/assets/miniport/js/util.js"></script>
			<script src="/public/assets/miniport/js/main.js"></script>

	</body>
</html>
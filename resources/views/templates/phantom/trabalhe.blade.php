<!DOCTYPE HTML>
<html>
	<head>
    <title>Template Diferente</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/public/assets/phantom/css/main.css" />
		<noscript><link rel="stylesheet" href="/public/assets/phantom/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

			<x-base.header :configs="$configs" />
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1 class="header-txt">Encaminhe aqui seu Curriculo</h1>
							<div class="inner">
                                <div class="duvida">
        <section>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field half">
                        <input type="text" name="name" id="name" placeholder="Nome" />
                    </div>
                    <div class="field half">
                        <input type="email" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="field">
                        <textarea name="message" id="message" placeholder="Nos conte um pouco sobre você"></textarea>
                    </div>
                    <div class="field half">
                        <input type="file" name="name" id="name" placeholder="Adicione seu Curriculo Aqui" />
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Enviar" class="primary" /></li>
                </ul>
            </form>
        </section>
        </div>
</div>
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

	</body>
</html>
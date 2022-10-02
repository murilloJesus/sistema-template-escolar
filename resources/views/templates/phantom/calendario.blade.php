<!DOCTYPE HTML>
<html>
	<head>
    <title>Template Diferente</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/public/assets/phantom/css/main.css" />
        <link rel="stylesheet" href="/public/assets/phantom/css/calendario.css" />
		<noscript><link rel="stylesheet" href="/public/assets/phantom/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

			<x-base.header :configs="$configs" />

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1 class="header-txt">Calendario Escolar</h1>
						
                        
                        
                            <div class="calendar"></div>
                        
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
            <script src="/public/assets/phantom/js/calendario.js"></script>

	</body>
</html>
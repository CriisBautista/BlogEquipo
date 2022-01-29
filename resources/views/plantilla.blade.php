<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('tituloBase')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="{{Route('index')}}">Cliente Servidor</a></h1>
						<nav class="links">
							<ul>
								<li><a href="{{Route('index')}}">Inicio</a></li>
								<li><a href="{{Route('tema1')}}">Tema 1</a></li>
								<li><a href="{{Route('tema2')}}">Tema 2</a></li>
								<li><a href="{{Route('tema3')}}">Tema 3</a></li>
								<li><a href="#menu">Más</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Buscar</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Buscar" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Buscar" />
								</form>
							</section>

						<!-- Links -->
						<section>
								<ul class="links">
									<li>
										<a href="{{Route('tema1')}}">
											<h3>Tema 1</h3>
											<p>Reconocer los conceptos de sistemas de información</p>
										</a>
									</li>
									<li>
										<a href="{{Route('tema2')}}">
											<h3>Tema 2</h3>
											<p>Reconocer la evolución de los sistemas de información</p>
										</a>
									</li>
									<li>
										<a href="{{Route('tema3')}}">
											<h3>Tema 3</h3>
											<p>Definir los conceptos de cliente y servidor</p>
										</a>
									</li>
									<li>
										<a href="{{Route('tema4')}}">
											<h3>Tema 4</h3>
											<p>Definir los sistemas de computadoras centrales y dedicadas</p>
										</a>
									</li>
									<li>
										<a href="{{Route('tema5')}}">
											<h3>Tema 5</h3>
											<p>Definir los sistemas de conexión libre y a través de redes</p>
										</a>
									</li>
									<li>
										<a href="{{Route('tema6')}}">
											<h3>Tema 6</h3>
											<p>Protocolos de comunicación de red</p>
										</a>
									</li>
									<li>
										<a href="{{Route('tema7')}}">
											<h3>Tema 7</h3>
											<p>Sistemas de arquitectura cliente/servidor</p>
										</a>
									</li>
									<li>
										<a href="{{Route('tema8')}}">
											<h3>Tema 8</h3>
											<p>Clasificar sistemas de información de acuerdo a su arquitectura</p>
										</a>
									</li>
									<li>
										<a href="{{Route('tema9')}}">
											<h3>Tema 9</h3>
											<p>Proceso  de  diagramación  de componentes </p>
										</a>
									</li>
								</ul>
							</section>
						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="#" class="button large fit">Contacto</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">@yield('titulo')</a></h2>
										<p>@yield('subtitulo')</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">@yield('fecha')</time>
										<a href="#" class="author"><span class="name">@yield('autor')</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="@yield('imagen')" alt="" /></span>
								<p>@yield('parrafo1')</p>
								<p>@yield('parrafo2')</p>
								<footer>
									<ul class="stats">
										<li><a href="#">@yield('categoria')</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

					</div>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">Los pibes &copy; Todos los derechos reservados 2022.</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>
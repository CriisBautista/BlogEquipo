<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>INICIO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="{{Route('index')}}">Cliente servidor</a></h1>
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
										<h2><a href="{{Route('tema1')}}">Reconocer los conceptos de sistemas de información.</a></h2>
										<p>Conjunto de componentes interrelacionados que trabajan juntos.</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">Enero 27, 2022</time>
										<a href="{{Route('tema1')}}" class="author"><span class="name">Yair</span><img src="images/yair.jpg" alt="" /></a>
									</div>
								</header>
								<a href="{{Route('tema1')}}" class="image featured"><img src="images/tema1.jpg" alt="" /></a>
								<p>Un Sistema de Información (SI) es un conjunto de componentes interrelacionados que trabajan juntos para recopilar, procesar, almacenar y difundir información para apoyar la toma de decisiones.</p>
								<footer>
									<ul class="actions">
										<li><a href="{{Route('tema1')}}" class="button large">Seguir leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li class="icon solid fa-heart">128</li>
									</ul>
								</footer>
							</article>

						<!-- Post -->
						<article class="post">
								<header>
									<div class="title">
										<h2><a href="{{Route('tema2')}}">Reconocer la evolución de los sistemas de información</a></h2>
										<p>Conduce a prácticas de trabajo eficientes y una comunicación efectiva para tomar mejores decisiones.</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">Enero 26, 2022</time>
										<a href="{{Route('tema2')}}" class="author"><span class="name">Brandon</span><img src="images/brandon.jpg" alt="" /></a>
									</div>
								</header>
								<a href="{{Route('tema2')}}" class="image featured"><img src="images/tema2.png" alt="" /></a>
								<p>Un sistema de información es una combinación de procesos, hardware, personal capacitado, software, infraestructura y estándares que están diseñados para crear, modificar, almacenar, administrar y distribuir información para sugerir nuevas estrategias comerciales y nuevos productos.</p>
								<footer>
									<ul class="actions">
										<li><a href="{{Route('tema2')}}" class="button large">Seguir leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li class="icon solid fa-heart">119</li>
									</ul>
								</footer>
							</article>

						<!-- Post -->
						<article class="post">
								<header>
									<div class="title">
										<h2><a href="{{Route('tema3')}}">Definir el los conceptos de cliente y servidor</a></h2>
										<p>Se llama cliente al dispositivo que requiere ciertos servicios a un servidor.</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">Enero 25, 2022</time>
										<a href="{{Route('tema3')}}" class="author"><span class="name">Cristian</span><img src="images/cristian.jpg" alt="" /></a>
									</div>
								</header>
								<a href="{{Route('tema3')}}" class="image featured"><img src="images/tema3.png" alt="" /></a>
								<p>La expresión cliente servidor se utiliza en el ámbito de la informática. En dicho contexto, se llama cliente al dispositivo que requiere ciertos servicios a un servidor. La idea de servidor, por su parte, alude al equipo que brinda servicios a las computadoras (ordenadores) que se hallan conectadas con él mediante una red.</p>
								<footer>
									<ul class="actions">
										<li><a href="{{Route('tema1')}}" class="button large">Seguir leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li class="icon solid fa-heart">106</li>
									</ul>
								</footer>
							</article>

						<!-- Post -->
						<!--
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Elements</a></h2>
										<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-18">October 18, 2015</time>
										<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>

								<section>
									<h3>Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
  print 'Iteration ' + i;
  deck.shuffle();
  i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3>Lists</h3>
									<div class="row">
										<div class="col-6 col-12-medium">
											<h4>Unordered</h4>
											<ul>
												<li>Dolor pulvinar etiam.</li>
												<li>Sagittis adipiscing.</li>
												<li>Felis enim feugiat.</li>
											</ul>
											<h4>Alternate</h4>
											<ul class="alt">
												<li>Dolor pulvinar etiam.</li>
												<li>Sagittis adipiscing.</li>
												<li>Felis enim feugiat.</li>
											</ul>
										</div>
										<div class="col-6 col-12-medium">
											<h4>Ordered</h4>
											<ol>
												<li>Dolor pulvinar etiam.</li>
												<li>Etiam vel felis viverra.</li>
												<li>Felis enim feugiat.</li>
												<li>Dolor pulvinar etiam.</li>
												<li>Etiam vel felis lorem.</li>
												<li>Felis enim et feugiat.</li>
											</ol>
											<h4>Icons</h4>
											<ul class="icons">
												<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
											</ul>
										</div>
									</div>
									<h3>Actions</h3>
									<div class="row">
										<div class="col-6 col-12-medium">
											<ul class="actions">
												<li><a href="#" class="button">Default</a></li>
												<li><a href="#" class="button">Default</a></li>
												<li><a href="#" class="button">Default</a></li>
											</ul>
											<ul class="actions small">
												<li><a href="#" class="button small">Small</a></li>
												<li><a href="#" class="button small">Small</a></li>
												<li><a href="#" class="button small">Small</a></li>
											</ul>
											<ul class="actions stacked">
												<li><a href="#" class="button">Default</a></li>
												<li><a href="#" class="button">Default</a></li>
												<li><a href="#" class="button">Default</a></li>
											</ul>
											<ul class="actions stacked">
												<li><a href="#" class="button small">Small</a></li>
												<li><a href="#" class="button small">Small</a></li>
												<li><a href="#" class="button small">Small</a></li>
											</ul>
										</div>
										<div class="col-6 col-12-medium">
											<ul class="actions stacked">
												<li><a href="#" class="button fit">Default</a></li>
												<li><a href="#" class="button fit">Default</a></li>
											</ul>
											<ul class="actions stacked">
												<li><a href="#" class="button small fit">Small</a></li>
												<li><a href="#" class="button small fit">Small</a></li>
											</ul>
										</div>
									</div>
								</section>

								<section>
									<h3>Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3>Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button large">Large</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions fit">
										<li><a href="#" class="button fit">Fit</a></li>
										<li><a href="#" class="button fit">Fit</a></li>
										<li><a href="#" class="button fit">Fit</a></li>
									</ul>
									<ul class="actions fit small">
										<li><a href="#" class="button fit small">Fit + Small</a></li>
										<li><a href="#" class="button fit small">Fit + Small</a></li>
										<li><a href="#" class="button fit small">Fit + Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
										<li><a href="#" class="button icon solid fa-upload">Icon</a></li>
										<li><a href="#" class="button icon solid fa-save">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button disabled">Disabled</span></li>
										<li><span class="button disabled icon solid fa-download">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3>Form</h3>
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
											</div>
											<div class="col-12">
												<select name="demo-category" id="demo-category">
													<option value="">- Category -</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-normal" name="demo-priority">
												<label for="demo-priority-normal">Normal</label>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="col-6 col-12-small">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="col-6 col-12-small">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="col-12">
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>

								<section>
									<h3>Image</h3>
									<h4>Fit</h4>
									<div class="box alt">
										<div class="row gtr-uniform">
											<div class="col-12"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
										</div>
									</div>
									<h4>Left &amp; Right</h4>
									<p><span class="image left"><img src="images/pic07.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
									<p><span class="image right"><img src="images/pic04.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
								</section>

							</article>
						-->

						<!-- Pagination -->
							

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="{{Route('index')}}" class="logo"><img src="/images/logo.png" alt="" /></a>
								<header>
									<h2>Cliente Servidor</h2>
									<p>Blog informativo</p>
									<p>Creadores</p>
									<p>Cristian Efrain Bautista Bautista</p>
									<p>Cesar Yair Lopez Lopez</p>
									<p>Brandon Romero Romero</p>
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="{{Route('tema4')}}">Definir los sistemas de computadoras centrales y dedicadas</a></h3>
												<time class="published" datetime="2015-10-20">Enero 28, 2022</time>
												<a href="{{Route('tema4')}}" class="author"><img src="images/yair.jpg" alt="" /></a>
											</header>
											<a href="{{Route('tema4')}}" class="image"><img src="images/tema4.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
									<article class="mini-post">
											<header>
												<h3><a href="{{Route('tema5')}}">Definir los sistemas de conexión libre y a través de redes</a></h3>
												<time class="published" datetime="2015-10-20">Enero 22, 2022</time>
												<a href="{{Route('tema5')}}" class="author"><img src="images/brandon.jpg" alt="" /></a>
											</header>
											<a href="{{Route('tema5')}}" class="image"><img src="images/tema5.png" alt="" /></a>
										</article>

									<!-- Mini Post -->
									<article class="mini-post">
											<header>
												<h3><a href="{{Route('tema6')}}">Protocolos de comunicación de red</a></h3>
												<time class="published" datetime="2015-10-20">Enero 26, 2022</time>
												<a href="{{Route('tema6')}}" class="author"><img src="images/cristian.jpg" alt="" /></a>
											</header>
											<a href="{{Route('tema6')}}" class="image"><img src="images/tema6.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
									<article class="mini-post">
											<header>
												<h3><a href="{{Route('tema7')}}">Sistemas de arquitectura cliente/servidor</a></h3>
												<time class="published" datetime="2015-10-20">Enero 25, 2022</time>
												<a href="{{Route('tema7')}}" class="author"><img src="images/yair.jpg" alt="" /></a>
											</header>
											<a href="{{Route('tema7')}}" class="image"><img src="images/tema7.jpg" alt="" /></a>
										</article>

								</div>
							</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="{{Route('tema8')}}">Clasificar sistemas de información de acuerdo a su arquitectura</a></h3>
												<time class="published" datetime="2015-10-20">Enero 29, 2022</time>
											</header>
											<a href="{{Route('tema8')}}" class="image"><img src="images/tema8.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="{{Route('tema9')}}">Proceso  de  diagramación  de componentes </a></h3>
												<time class="published" datetime="2015-10-20">Enero 30, 2022</time>
											</header>
											<a href="{{Route('tema9')}}" class="image"><img src="images/tema9.png" alt="" /></a>
										</article>
									</li>
								</ul>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>Acerca de</h2>
								<p>En este sitio web encontraras los temas mas importante hacer del cliente-servidor</p>
								<ul class="actions">
									<li><a href="#" class="button">Aprender más</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">Los pibes &copy; Todos los derechos reservados 2022.</p>
							</section>

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
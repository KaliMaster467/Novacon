<html>
<head>
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Public/Css/estiloIndex.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$("#slide > div:gt(0)").hide();

		setInterval(function() { 
		  $('#slide > div:first')
		    .fadeOut(1000)
		    .next()
		    .fadeIn(1000)
		    .end()
		    .appendTo('#slide');
		},  3000);		
	</script>

</head>
<body class="main-responsive-body">
	<nav class="navbar">
		<ul class="navbar-list">
			<li class="navbar-art"><a href="Index">Novaconnect</a></li>
			<li class="navbar-art"><a href="Ala">Soporte</a></li>
			<li class="navbar-art"><a href="Damn">BlacXOS</a></li>
			<li class="navbar-art"><a href="XD">PulseXync</a></li>
			<li class="navbar-art"><a href="GG">HomeXync</a></li>
		</ul>
	</nav>
	<section class="main-publish">
		<div id="slide">
			<div>
				<div class="bdone">
					<div class="inner-one">
						<hgroup class="one">
							<h1>Vive</h1>
						</hgroup>
						<p>
							Comparte tus gustos, conoce
							nueva gente, socializa y encuentra a alguien con tus mismos gustos.
						</p>
					</div>	
				</div>
			</div>
			<div>
				<div class="bdtwo">

				</div>
			</div>
			<div>
				<div class="bdthree">
					<div class="inner-three">
						<hgroup class="three">
							<h1>Inovación</h1>
						</hgroup>
						<p>
							Novaconnect constantemente trabaja para brindarte
							los mejores productos.	
						</p>	
					</div>					
				</div>
			</div>
		</div>
	</section>
	<section class="red-publish">
		<div class="red-container">
			<hgroup>
				<h1>Conóce PulseXync</h1>
			</hgroup>
			<div class="red-content">
				<p>
					Conoce personas con FriendTouch aplicacion que te permite interactuar con otro individuo de manera unica, <br><b>!! Solo basta con chocar las muñecas ¡¡</b>
				</p>
			</div>
			<img class ="social-brands facebook-brand" src="Public/Images/facebook.png">
			<img class="social-brands insta-brand" src="Public/Images/instagram.png">
			<img src="Public/Images/snap.png" class="social-brands snap-brand">
			<img class="bracelete-banner" src="Public/Images/bracelet.png">
			<input class="btn-pulse" type="button" name="more-pulse" value="Ver mas PulseXync" onclick="location.href='Index';">
		</div>
	</section>
</body>
</html>
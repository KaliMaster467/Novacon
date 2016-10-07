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
			<li class="navbar-art"><a href="Damn">BlackOS</a></li>
			<li class="navbar-art"><a href="XD">PulseSync</a></li>
			<li class="navbar-art"><a href="GG">HomeSync</a></li>
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
						<img class="facebook-banner" src="Public/Images/facebook.png">			
						<img class="instagram-banner" src="Public/Images/instagram.png">
						<img class="snap-banner" src="Public/Images/snap.png">	
						<img class="whats-banner" src="Public/Images/whats.png">	
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
					<div>					
				</div>
			</div>
		</div>
	</section>

</body>
</html>
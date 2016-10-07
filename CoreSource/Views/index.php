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
					
				</div>
			</div>
			<div>
				<div class="bdtwo">
					
				</div>
			</div>
			<div>
				<div class="bdthree">
					
				</div>
			</div>
		</div>
	</section>

</body>
</html>
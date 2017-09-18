<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">

	<title>Nexus</title>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- menu debut-->
	<div id="colorMenu" class="ui top fixed  menu">
		
		<img class="logoMenu" src="logo_server_site.png">
		
		<a id="itemsMenu" class="item">Nexus Community</a>
		<div class="right menu">
			<a id="itemsMenu" class="item">Présentaton</a>
			<a id="itemsMenu" class="item">Jeux</a>
			<a id="itemsMenu" class="item">Discord</a>
		</div>
	</div>

	<!-- menu fin -->

	<!-- carrousel debut  -->

	<div class="bs-example">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item active">
					<img class="taille" src="/joinDiscord.png" alt="First Slide">
				</div>
				<div class="item">
					<img class="taille" src="/joinDiscord.png" alt="Second Slide">
				</div>
				<div class="item">
					<img class="taille" src="/joinDiscord.png" alt="Third Slide">
				</div>
			</div>

		</div>
	</div>

	<br>
	<br>
	<br>
	<br>

	<!-- carrousel fin  -->


	<!-- prez debut -->
	<div class="presentation">
		<div class="ui container">
			<div class="ui grid">
				<div class="sixteen wide column">
					<h2 id="titleh2" class="ui header">Presentation</h2>
					<div class="ui three stackable cards">
						<div id="carte" class="card">
							<div id="sizeCard" class="ui left piled inverted segment">
								<img src="https://cdn.worldvectorlogo.com/logos/discord.svg" class="ui tiny left floated image">
								<h3 id="titleCard"  class="ui header text-center" style="margin-top: 0px;">Notre discord</h3>
								<div class="floated right text-center description">
									<p id="textCard">
										Au début nous avons créer ce discord pour tester diverse bot et petit à petit nous avont inviter nos amis ,pour au final garder ce serveur comme principal.
									</p>                
								</div>
							</div>
						</div>
						<div id="carte" class="card">
							<div id="sizeCard" class="ui left piled inverted segment">
								<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/1/12/League_of_Legends_Icon.png/revision/latest?cb=20150402234343" class="ui tiny left floated image">
								<h3 id="titleCard" class="ui header text-center" style="margin-top: 0px;" >Nos projets</h3>
								<div class="floated right text-center description">
									<p id="textCard">
										Nous voulons un serveur agréable pour tout le monde , où tout le monde peut inviter qui il veut quand il veut. 
									</p>      
								</div>
							</div>
						</div>
						<div id="carte" class="card">
							<div id="sizeCard" class="ui left piled inverted segment">
								<img src="http://www.icone-png.com/png/25/24892.png" class="ui tiny left floated image">
								<h3 id="titleCard"  class="ui header text-center" style="margin-top: 0px;" >Notre but</h3>
								<div class="floated right text-center description">
									<p id="textCard">
										Notre but est de réunir un maximum de personnes pour pouvoir grandir , et que le serveur soit vivant.
									</p>      
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prez fin -->
	<!-- jeux debut -->
	<div class="jeux">
	<h2 id="titleh22" class="ui header">Jeux</h2>
		<div class="ui grid container">
			<div class="four wide column">
				<div id="carte" class="card">
							<div class="ui left piled inverted segment">
								<img class="ui medium circular image" src="https://vignette.wikia.nocookie.net/leagueoflegends/images/1/12/League_of_Legends_Icon.png/revision/latest?cb=20150402234343" class="ui tiny left floated image">
								<div class="floated right text-center description">
									<p id="textCard">
										Nous jouons surtout pour le fun , mais il peut nous arriver de try hard , venez chercher du mondde pour flex ou pour duoQ .
									</p>      
								</div>
							</div>
						</div>
			</div>
			<div class="four wide column">
				<div id="carte" class="card">
							<div class="ui left piled inverted segment">
								<img class="ui medium circular image" src="Overwatch_circle_logo.svg.png" class="ui tiny left floated image">
								<div class="floated right text-center description">
									<p id="textCard">
										Un peut pareille que league of legends nous jouons pour le fun mais il peut nous arriver de try hard , venez chercher vos mate .
									</p>      
								</div>
							</div>
						</div>
			</div>
			<div class="four wide column">
				<div id="carte" class="card">
							<div class="ui left piled inverted segment">
								<img class="ui medium circular image" src="d3.png" class="ui tiny left floated image">
								<div class="floated right text-center description">
									<p id="textCard">
										Nous jouons occasionnellement mais rien ne vous empeche de trouver des personne qui sont intéresser par Diablo III .
									</p>      
								</div>
							</div>
						</div>
			</div>
			<div class="four wide column">
				<div id="carte" class="card">
							<div class="ui left piled inverted segment">
								<img class="ui medium circular image" src="dofus.png" class="ui tiny left floated image">
								<div class="floated right text-center description">
									<p id="textCard">
									Nous jouons sur le serveur Pandore pour la plus part Venez nous rejoindre pour des AvA , des donjon, des succès.
									</p>      
								</div>
							</div>
						</div>
			</div>
		</div>
	</div>
	<!-- fin jeux  -->
	<!-- discord debut -->
	<div class="discord">




	</div>
	<!-- fin discord -->

</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
</html>


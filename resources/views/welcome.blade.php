<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">

	<link rel="icon" href="logo_server_site.png">

	<title>Nexus</title>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- menu debut-->
	<div id="colorMenu" class="ui top fixed  menu">
		
		<a href="#page-0"><img  class="logoMenu" src="logo_server_site.png"></a>
		
		<a href="#page-0" id="itemsMenu" class="item js-scrollTo">Nexus Community</a>
		<div class="right menu">
		<div class="item">
				<button id="btn1" class="ui secondary button "></button>
				<button id="btn2" class="ui button "></button>
			</div>
			<a href="#page-1" id="itemsMenu" class="item js-scrollTo">Présentation</a>
			<a href="#page-2" id="itemsMenu" class="item js-scrollTo">Jeux</a>
			<a href="#page-3" id="itemsMenu" class="item js-scrollTo">Discord</a>
		</div>
	</div>

	<!-- menu fin -->

	<!-- carrousel debut  -->

	<div id="page-0" class="bs-example">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div id="imgtaille" class="item active">
					<img class="taille" src="/1.png" alt="First Slide">
				</div>
				<div id="imgtaille" class="item">
					<img class="taille" src="/2.png" alt="Second Slide">
				</div>
				<div id="imgtaille" class="item">
					<img class="taille" src="/3.png" alt="Third Slide">
				</div>
			</div>

		</div>
	</div>

	<!-- carrousel fin  -->
	<div class="cut"></div>

	<!-- prez debut -->
	<div id="page-1" class="presentation">
		<div class="ui container">
			<div class="ui grid">
				<div class="sixteen wide column">
					<h2  id="titleh2" class="ui header">Presentation</h2>
					<div class="ui three stackable cards">
						<div id="carte" class="ui link card">
							<div id="sizeCard" class="ui link inverted segment">

								<img src="https://cdn.worldvectorlogo.com/logos/discord.svg" class="ui tiny left floated image">
								<h3 id="titleCard"  class="ui header text-center" style="margin-top: 0px;">Notre discord</h3>
								<div class="floated right text-center description">
									<p id="textCard">
										Au début nous avons créé ce discord pour tester diverse bot et petit à petit nous avont inviter nos amis ,pour au final garder ce serveur comme principal.
									</p>                
								</div>
							</div>
						</div>
						<div id="carte" class="ui link card">
							<div id="sizeCard" class="ui link inverted segment">
								<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/1/12/League_of_Legends_Icon.png/revision/latest?cb=20150402234343" class="ui tiny left floated image">
								<h3 id="titleCard" class="ui header text-center" style="margin-top: 0px;" >Nos projets</h3>
								<div class="floated right text-center description">
									<p id="textCard">
										Nous voulons un serveur agréable pour tout le monde , où tout le monde peut inviter qui il veut quand il veut. 
									</p>      
								</div>
							</div>
						</div>
						<div id="carte" class="ui link card">
							<div id="sizeCard" class="ui link inverted segment">
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
	<div class="cut"></div>
	<!-- jeux debut -->
	<div id="page-2" class="jeux">
		<h2 id="titleh2" class="ui header">Jeux</h2>
		<div class="ui grid container">
			<div class="four wide column">
				<div id="carte" class="ui link card">
					<div id="sizeCard2"  class="ui left inverted segment">
						<img class="ui medium circular image" src="https://vignette.wikia.nocookie.net/leagueoflegends/images/1/12/League_of_Legends_Icon.png/revision/latest?cb=20150402234343" class="ui tiny left floated image">
						<div class="floated right text-center description">
							<p id="textCard">
								Nous jouons surtout pour le fun , mais il peut nous arriver de try hard . Venez chercher du monde pour flex , pour duoQ ou tout simplement pour une normal.
							</p>      
						</div>
					</div>
				</div>
			</div>
			<div class="four wide column">
				<div id="carte" class="ui link card">
					<div id="sizeCard2" class="ui left  inverted segment">
						<img class="ui medium circular image" src="Overwatch_circle_logo.svg.png" class="ui tiny left floated image">
						<div class="floated right text-center description">
							<p id="textCard">
								Un peu comme League Of Legends , nous jouons pour le fun mais il peut nous arriver de try hard , venez chercher dess mates.
							</p>      
						</div>
					</div>
				</div>
			</div>
			<div class="four wide column">
				<div id="carte" class="ui link card">
					<div id="sizeCard2" class="ui left  inverted segment">
						<img class="ui medium circular image" src="d3.png" class="ui tiny left floated image">
						<div class="floated right text-center description">
							<p id="textCard">
								Nous jouons occasionnellement , mais rien ne vous empêche de trouver des personnes qui sont intéressés par Diablo III 
							</p>      
						</div>
					</div>
				</div>
			</div>
			<div class="four wide column">
				<div id="carte" class="ui link card">
					<div id="sizeCard2" class="ui left  inverted segment">
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
	<div class="cut"></div>
	<!-- discord debut -->
	<div id="page-3" class="discord">
		
		<h2 id="titleh2" class="h2didi">Discord</h2>

		<div>
			<a target="_blank" href="https://discord.gg/yZD24y">
				<img id="linkDiscord" class="ui medium circular image" src="logoJoin.png" class="ui tiny image"></a>



			</div>



			<!-- fin discord -->

		</body>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="{{ mix('js/app.js') }}"></script>
		</html>


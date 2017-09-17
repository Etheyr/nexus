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
	<nav class="navbar navbar-default navbar-fixed-top">

		<div class="menu">
			<img class="imgLogo"  src="logoBoot.png" width="50px" height="50px" alt="logo">
			<h3 class="titre">Nexus community</h3>
			<ul id="menu" class="nav navbar-nav navbar-right">

				<li id="menuLi"><a href="#">Presentation</a></li>
				<li id="menuLi"><a href="#">games</a></li>
				<li id="menuLi"><a href="#">nous rejoindre</a></li>

			</ul>
		</div>
	</nav>

	<!-- menu fin -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

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
                <img class="taille" src="/licorne.png" alt="First Slide">
            </div>
            <div class="item">
                <img class="taille" src="/licorne.png" alt="Second Slide">
            </div>
            <div class="item">
                <img class="taille" src="/licorne.png" alt="Third Slide">
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

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<h2 class="presentTitle">Présentation</h2>
		<div id="columnPadding" class="ui two column centered grid">
			<div class="ui link cards">

				<div id="card" class="card">
					<h3>lorem ipsum</h3>
					<div class="image">

					</div>
					<div class="content">
						<div>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas </div>
					</div>
				</div>
				<div id="card"  class="card">
					<h3>lorem ipsum</h3>
					<div class="image">
					</div>
					<div class="content">
						<div>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas </div>
					</div>
				</div>
				<div id="card" class="card">
					<h3>lorem ipsum</h3>
					<div class="image">

					</div>
					<div class="content">
						<div>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas </div>
					</div>
				</div>
			</div>
		</div>
	</div>



</div>
<!-- prez fin -->




</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
</html>

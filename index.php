<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AutosSOAP Exercise</title>
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://kit.fontawesome.com/744e01c600.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<?php
		require_once 'client.php';
	?>

	<header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Concessionaire!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Buy a New Car</div>
                <a class="btn btn-secondary btn-xl text-uppercase" href="#cars">Show Me The Cars!</a>
            </div>
      </header>

	<section class="section" id="cars">
		<h1>OUR CAR CATALOG</h1>
		<div id="output"></div>	
		<div id="video"></div>
		<div class="container">

			<?php
				$marcas = $client->ObtenerMarcasUrl();

				foreach($marcas as $marca => $url) {

			?>				
				
			<div class='card' style='width: 22rem;'>
				<img class='card-img-top mb-3' src='assets/<?= $marca ?>.png' alt='Card image cap'>
				<a onclick="getModels('<?= $marca ?>')" class='btn btn-secondary p-3 mt-3'>See <?= $marca ?> models</a>
				<a onclick="getVideo('<?= $url ?>')" class='btn btn-secondary p-3 mt-3'>See demo video</a>
			</div>


			<?php
				}
			?>
			

	</section>

	<footer class="footer">
		<div class="container">
			<h2>Follow our social networks</h2>
			<ul class="icons">
				<a href=""><i class="fab fa-twitter-square"></i></a>
				<a href=""><i class="fab fa-facebook-square"></i></a>
				<a href=""><i class="fab fa-instagram-square"></i></a>
				<a href=""><i class="fas fa-envelope-square"></i></a>
			</ul>
			<p class="copyright">&copy; Talleres Edu & Concessionaire.</p>
		</div>
	</footer>

	<script src="js/main.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
</body>
</html>

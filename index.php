<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog ::: Linda Copello</title>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- CHAMAR NAV -->
<?php include('nav.php'); ?>

<!-- CARROSEL DE FOTOS  -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide1.jpg" class="d-block w-100" alt="hp">
      </div>
    <div class="carousel-item">
      <img src="images/slide2.jpg" class="d-block w-100" alt="this is us">
    </div>
    <div class="carousel-item">
      <img src="images/slide3.jpg" class="d-block w-100" alt="the nightstalker">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- início card -->
<div class="container">
		<div class="row row-cols-1 row-cols-md-3 g-4">
		<?php foreach($results as $post): ?>
		  <div class="col gy-5">
		    <div class="card">
		      <img src="<?= $post["image"] ?>" class="card-img-top" alt="...">
		      <div class="card-body">
		        <h5 class="card-title">
<?= $post["title"] ?>
        </h5>
		        <p class="card-text">
<?= $post["description"] ?>
         </p>
		        <a href="viewBlog.php?id=<?= $post["id"] ?>">
<i class="fas fa-eye check-icon">Ver</i>
        </a>
		      </div>
		    </div>
		  </div>
		  <?php endforeach; ?>
	</div>
	<!-- fim card -->


<!-- CARDS -->
<div class="container">
  <!-- row: distribuir os cards / row-cols-3: n entendi direito row-cols-md-2: deixa dois cards horizontais g-4:??? -->
<div class="row row-cols-3 row-cols-md-2 g-4">
  <!-- o col gy-5 se tirar fica um embaixo do outro -->
  <div class="col gy-5">
    <!-- a classe card aparentemente é o card do fundo de cada "topico" -->
    <div class="card">
      <img src="images/card1.jpg" class="card-img-top">
      <!-- se tirar o card body fica td mebaixo um do outro -->
      <div class="card-body">
      <a href="http://localhost/Projeto_Blog/viewPost.php">Modern Family</a>
        <!-- <p class="card-text">É uma série em formato de mocumentário que acompanha a vida de uma família. Possui 11 temporadas, entre 20 e 25 episódios com em média 22min cada.</p> -->
      </div>
    </div>
  </div>
  <div class="col gy-5">
    <div class="card">
      <img src="images/card2.jpg" class="card-img-top">
      <div class="card-body">  
      <a href="http://localhost/Projeto_Blog/viewPost.php">American Horror Story</a>
        <!-- <p class="card-text">É uma série dos gêneros horror, suspense, drama e slasher criada e produzida por Ryan Murphy. A série apresenta cada temporada com uma história independente, seguindo um conjunto diferente de personagens e ambientações distintas no mesmo universo ficcional e um enredo com seu próprio "início, meio e fim".</p> -->
      </div>
    </div>
  </div>
  <div class="col gy-5">
    <div class="card">
      <img src="images/card3.png" class="card-img-top">
      <div class="card-body">
        <a href="http://localhost/Projeto_Blog/viewPost.php">Game of Thrones</a>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col gy-5">
    <div class="card">
      <img src="images/card4.jpg" class="card-img-top">
      <div class="card-body">
        <a href="http://localhost/Projeto_Blog/viewPost.php">The Handmaid's Tale</a>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
</div>
</div>
  </body>
  
  <!-- CHAMAR FOOTER -->
  <?php include('footer.php'); ?>

  

</html>
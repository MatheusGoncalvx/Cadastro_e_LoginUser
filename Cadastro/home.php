<?php
session_start();

// Verifica se o botão "Sair" foi clicado
if (isset($_POST['sair'])) {
    // Limpa todas as variáveis de sessão
    session_unset();

    // Destrói a sessão atual
    session_destroy();

    // Redireciona para a página de login
    header('Location: login.php');
    exit();
}

// Verifica se o usuário está autenticado
if (!isset($_SESSION['autenticado'])) {
    // Se o usuário não estiver autenticado, redireciona para a página de login
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pear.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <style>
    .navbar-custom1 {
      height: 30px;
      margin-bottom: 0px;
      margin-top: 10px;
      margin-right: 50px;
      margin-left: 50px;

    }

    .navbar-custom2{
      height: 30px;
      margin-bottom: 0px;
      margin-top: 10px;
      margin-right: 100px;
      margin-left: 100px;
      justify-content: center;
    }
    
    nav#menu1 ul {
		list-style: none;
		position: absolute;
		top: 20px;
		left: 330px;
		font-size: 12pt;
		font-family: arial;
		}
		
		#menu1 ul li{
		display: inline;
		padding: 30px;
		}
		
		#menu1 ul li a{
		display: inline-block;
		color: black;
		text-decoration: none;
		}
		
		nav#menu2 ul {
		list-style: none;
		position: absolute;
		top: 95px;
		left:670px;
		font-size: 12pt;
		font-family: arial;
		}
		
		#menu2 ul li{
		display: inline;
		padding: 30px;
		}
		
		#menu2 ul li a{
		display: inline-block;
		color: black;
		text-decoration: none;
		}

    nav#menu3 ul {
		list-style: none;
		position: absolute;
		top: 710px;
		left: 80px;
		font-size: 12pt;
		font-family: arial;
		}
		
		#menu3 ul li{
		display: inline;
		padding: 15px;
		}
		
		#menu3 ul li a{
		display: inline-block;
		color: black;
		text-decoration: none;
		}
        .botaoSair{
            margin-left: 780px;
    margin-top: 35px;
        }
 </style>
</head>
<body>
  <nav class="navbar bg-secondary navbar-custom1 navbar-expand-lg"></nav>
  <nav class="navbar bg-info navbar-custom2 navbar-expand-lg"></nav>
  
  <div class="navbar bg-body-white">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <a class="navbar-brand" href="home.php">
            <img src="img/logo.png" alt="Bootstrap" width="110" height="110">
          </a>
        </div>
        <div>
          <nav id="menu1">
		        <ul>
				    <b><li><a href="https://shop.samsung.com/br/informatica?order=OrderByPriceDESC">Informática</a></li>
					<li><a href="https://shop.samsung.com/br/eletrodomesticos?order=OrderByPriceDESC">Eletrodoméstico</a></li>
					<li><a href="https://shop.samsung.com/br/mobile?order=OrderByPriceDESC">Celulares</a></li>

                    <div class="botaoSair">
        <form method="post" action="">
            <button type="submit" name="sair" class="btn btn-primary">Sair</button>
        </form>
    </div>
				</ul>
				
		<nav id="menu2">
		        <ul>
				    <li><a href="https://www.samsung.com/br/offer/">Promoções</a></li>
					<li><a href="https://www.samsung.com/br/business/?_ga=2.67768913.1773242954.1654308644-322003070.1654308644">Business</a></li>
					<li><a href="https://shop.samsung.com.br/login?next=/br/account">Minha Conta</a></li>
				</ul>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center">
    <div id="carouselExampleIndicators" class="carousel slide align-self-center" style="width: 80%">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/promo1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/promo2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/promo3.png" class="d-block w-100" alt="...">
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
  </div>

  <br>
  <nav id="menu3">
    <ul>
    <li><a href="https://shop.samsung.com/br/">Produtos & Informações</a></li>
  <li><a href="https://www.samsung.com/br/support/?src=menu">Suporte</a></li>
  <li><a href="https://shop.samsung.com/br/">Virtual Store</a></li>
</ul>
<br>
</body>
</html>
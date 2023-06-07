<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS\estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Playfair+Display:ital,wght@0,400;1,400;1,500;1,600&family=Sen:wght@400;700;800&family=Ubuntu:ital,wght@0,500;0,700;1,500;1,700&display=swap" rel="stylesheet">
	<title>Noticias Tec</title>
</head>
<body>
<header>
    <div class="principal">
      <img  class="logo" src="IMG\logo\logo.png"> <span>TecNews Noticias</span>
      
      <div class="sub-div">
        <nav class="nav-bar">
          <li><a href="https://olhardigital.com.br/">Últimas noticias</a></li>
          <li><a href="sair.php"> Sair </a></li>
          </nav>
      </div>
    </div>
  </header>
  <div id="main">
	<h1>Area Vip</h1>
	<div class="card-corpo">
  <div class="card">
  <img src="IMG\baixados.png" width="250x250"  alt="Placeholder Image">
  <h2>Documentação PHP</h2>
  <p>Some text describing the card's content.</p>
  <a href="https://www.php.net/docs.php" class="button">visitar</a>
</div>
<div class="card">
  <div class="card-header">
    <h2>Card Title</h2>
  </div>
  <div class="card-body">
    <p>Some text describing the card's content.</p>
    <a href="#" class="button">visitar</a>
  </div>
</div>
</div>

  </div>


	
</body>
</html>





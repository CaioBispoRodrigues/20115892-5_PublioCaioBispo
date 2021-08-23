<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="images/Babysnoop03-Reborn-Candy.ico" type="image/x-icon">
    <title>Mapa Back End 1</title>
</head>
<body>
	<div id="header">
		<div id="logo">
			<a href="?pg=1" ><img src="images/logo2.JPG"></a>
		</div>
	</div>
	<div id="menu">
		<nav>
         <ul>
           <li><a href="index.php?pg=1">Home</a></li>
           <li><a href="index.php?pg=2">Quem somos</a></li>           
           <li><a href="index.php?pg=3">Contato</a></li>
           <li><a href="index.php?pg=4">localização</a></li>
          </ul>
        </nav>
	</div>

	<div id="main">
		<div class="article">
			<h1> 
				<?php
					include_once('function/controlar.php'); 
					@$valor = $_GET['pg'];
					controlarAcesso($valor);

				 ?>
				 
			</h1>
		</div>
		</div>
	<div id="sidebar">
		
	</div>
<br>
	<div id="footer">
		<p>
			Aluno: Públio Caio Pires Bispo Rodrigues<br>
			RA: 20115892-5<br>
			CURSO: SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET<br>
			UNIVERSIDADE CESUMAR - UNICESUMAR
		</p>
	</div>
			
	
</body>
</html>
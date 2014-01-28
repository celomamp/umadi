<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>UMADI</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="rsc/css/bootstrap.min.css">
	<script type="text/javascript" src="rsc/js/bootstrap.js"></script>
	<script type="text/javascript" src="rsc/js/jquery.js"></script>
	<script type="text/javascript" src="rsc/js/default.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Chivo:400,900' rel='stylesheet' type='text/css'>
	<link href="rsc/themes/5/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="rsc/themes/5/js-image-slider.js" type="text/javascript"></script>
</head>
<body>


<header>

	<h1>UMADI</h1>
	<p>UNIÃO DA MOCIDADE DA ASSEMBLÉIA DE DEUS DE ITAPIRA</p>
	
</header>

<nav>
	<ul>
		<li><a href="./?pag=1">Home</a></li>
		<li><a href="./?pag=2">Diretoria</a></li>
		<li><a href="./?pag=3">Agenda</a></li>
		<li><a href="./?pag=4">Recados</a></li>
		<li><a href="./?pag=5">Atividades</a></li>
		<li><a href="./?pag=6">Coral</a></li>
		<li><a href="./?pag=7">Orquestra</a></li>
		
	</ul>

</nav>

<?php

	if(isset($_GET['pag'])){
		$pag = $_GET['pag'];
	}else{
		$pag = 0;
	}
	
	switch ($pag) {
		case 1:
			require('login.php');
			break;

		case 2:
			require('diretoria.php');
			break;

		case 3:
			require('agenda.php');
			break;

		case 4:
			require('recados.php');
			break;

		case 5:
			require('atividades.php');
			break;

		case 6:
			require('coral.php');
			break;

		case 7:
			require('orquestra.php');
			break;
		
		default:
			echo "<h1 class='text-center'> Bem Vindo à UMADI Network </h1>";
			break;
	}
	
?>





</body>
</html>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Aula 02</title>
	</head>
	<body>

	<p>
	<?php 
	 require_once 'Caneta.php';


	 $c1 = new Caneta;
	 $c1->cor ="Azul";
	 $c1->ponta = 0.5;
	 $c1->tampada=false;


	 $c1->tampar();
	 $c1->rabiscar();
	 
	print_r($c1);


	$c2 = new Caneta;
	 $c2->cor ="Rosa";
	 $c2->ponta = 0.55;
	 $c2->tampada=false;


	 $c2->destampar();
	 $c2->rabiscar();

	 print_r($c2);

echo "<br>";
	 
 	require'Isqueiro.php';
	 $c3 = new Isqueiro;

	 $c3->cor ="Preto";
	 $c3->tamanho="Grande";
	 $c3->modelo="BIC";
	 $c3->gas=true;


	 $c3->ligado();
	 $c3->Estado();

	  print_r($c3);

	 ?>

	</p>
	</body>
	</html>
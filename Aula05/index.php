<!DOCTYPE html>

<html lang="pt-pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Exercicio
	</title>

</head>
<body>

	<pre>
		<?php 
	 require_once 'ContaBanco.php';
	 $c1 = new ContaBanco();
	 $c2 = new ContaBanco();

	 $c1->abrirConta("CC");
	 $c1->SetDono("Bráulio");
	 $c1->setNumConta(1234);

	 $c2->abrirConta("CP");
	 $c2->SetDono("Valdir");
	 $c2->SetNumConta(4321);
	 
	 print_r($c1);
	 print_r($c2);

	 $c1->depositar(300);
	 $c2->depositar(500);

	

	 print_r($c1);
	 print_r($c2);	
	 $c1->sacar(350);
	 // Com problemas o método sacar $c1->pagarMensal();
	 print_r($c1);
	 print_r($c2);	

	 $c1->fecharConta();
	?>
	</pre>

</body>
</html>
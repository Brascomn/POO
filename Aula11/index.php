<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        
        <?php
        require_once 'Pessoa.php';
        require_once 'Funcionario.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        $p1 = new Pessoa();
        $p2 = new Professor();
        $p3 = new Aluno();
        $p4 = new Funcionario();

        $p2->setNome("Valdir");
        $p2->setIdade(11);
        $p2->setSexo("M");
        $p2->setEspecialidade("Matematica");
        $p2->setSalario(15000);

        $p3->setNome("Paulo");
        $p3->setIdade(13);
        $p3->setSexo("M");
        $p3->setMatr("Sim");
        $p3->setCurso("Agronomia");
        
        $p4->setNome("Paulo");
        $p4->setIdade(14);
        $p4->setSexo("M");
        $p4->setSetor("Finanças");
        $p4->setsetor("Fisica");
        print_r($p4);
        
        $p4->mudarTrabalho("Agronomia");
        print_r($p4);
        $p3->setNome("Euclides");
        $p4->setNome("Cássio");
        //print_r($p3);
       // print_r($p2);
        $p2->ReceberAumento(1000);
        $p2->fazerAniv();
     //   print_r($p3);
   //     print_r($p2);
        ?>
    
</pre>
</body>
</html>
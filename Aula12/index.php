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
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        $p1 = new Visitante();

        $p1->setNome("Valdir");
        $p1->setIdade(12);
        $p1->setSexo("M");
        print_r($p1);

        $p2  = new Aluno();

        $p2 ->setNome("Chimuanga");
        $p2 ->setIdade(22);
        $p2 ->setSexo("M");
        $p2->setMatricula("Activa");
        $p2->setCurso("Informática");
        print_r($p2);
        $p2->fazerAniversario();
        print_r($p2);
        $p2->pagarMensalidade();
       
        $p3  = new Bolsista();

        $p3 ->setNome("Jubileu");
        $p3 ->setIdade(33);
        $p3 ->setSexo("M");
        $p3->setMatricula("Activa");
        $p3->setCurso("Informática");
        $p3->setBolsa(25.9);
        print_r($p3);
        $p3->fazerAniversario();
        $p3->pagarMensalidade();
        print_r($p3);
        $p3->renovarBolsa();
        ?>
    </pre>
</body>
</html>
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
        require_once 'Cachorro.php';

        $c1=new Cachorro();
        $c1->emitirSom();
        $c1->reagirHora(13,45);
        $c1->reagirDono(true);
        $c1->reagirIdade(10,60);
       
        $c2=new Cachorro();
        $c2->emitirSom();
        $c2->reagirHora(2,45);
        $c2->reagirDono(false);
        $c2->reagirIdade(1,60);
       



        //override === sobreposicao
        ?>
    </pre>
</body>
</html>
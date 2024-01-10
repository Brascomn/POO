<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <h1>Projectos Controlador Remoto</h1>

    <pre>
        <?php
        require_once 'ControladorRemoto.php';
        $c = new ControladorRemoto();

        $c->ligar();
        $c->maisVolume();
        //$c->maisVolume();
        $c->abrirMenu();
        
        $c->menosVolume();
        $c->ligarMudo();
        $c->abrirMenu();
        $c->play();
        $c->abrirMenu();
        $c->pause();
        $c->abrirMenu();
        
        ?>
    </pre>
</body>
</html>
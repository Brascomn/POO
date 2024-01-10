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

        require_once 'Mamifero.php';
        require_once 'Peixe.php';
        require_once 'Reptil.php';
        require_once 'Ave.php';
        require_once 'Tartaruga.php';
        require_once 'Cachorro.php';
        require_once 'Goldfish.php';
        require_once 'Canguru.php';
        require_once 'Arara.php';

        $m = new Mamifero();
        $m->setPeso(3.5);
        $m->setIdade(1);
        $m->setMenbro("Cão");
        $m->setCorPelo("Preto e Castanho");
        print_r($m);
        $m->locomover();
        $m->alimentar();
        $m->emitirSom();

        $n = new Ave();
        $n->setPeso(3.5);
        $n->setIdade(2);
        $n->setMenbro("Aguia");
        $n->setCorPena("Branco, castanho e cizento");
        print_r($n);
        $n->locomover();
        $n->alimentar();
        $n->emitirSom();
        $n->fazerNinho();
       
        $r = new Reptil();
        $r->setPeso(5);
        $r->setIdade(4);
        $r->setMenbro("Largatixa");
        $r->setCorEscama("Verde");
        print_r($r);
        $r->locomover();
        $r->alimentar();
        $r->emitirSom();

        $a = new Peixe();
        $a->setPeso(5);
        $a->setIdade(4);
        $a->setMenbro("Tubarão");
        $a->setCorEscama("Cinza e Branco");
        print_r($a);
        $a->locomover();
        $a->alimentar();
        $a->emitirSom();
        $a->soltarBolha();
    
        $t = new Tartaruga();
        $t->setPeso(5);
        $t->setIdade(4);
        $t->setMenbro("Camuflada");
        $t->setCorEscama("Cinza e Branco");
        print_r($t);
        $t->locomover();
        $t->alimentar();
        $t->emitirSom();
        
        $c = new Cobra();
        $c->setPeso(2);
        $c->setIdade(3);
        $c->setMenbro("MAMBA NEGRA");
        $c->setCorEscama("PRETA");
        print_r($c);
        $c->locomover();
        $c->alimentar();
        $c->emitirSom();
       
        $u = new Canguru();
        $u->setPeso(2);
        $u->setIdade(3);
        $u->setMenbro("CASTANHO");
        $u->setCorPelo("PRETA");
        print_r($u);
        $u->locomover();
        $u->alimentar();
        $u->UsarBolsa();
        $u->emitirSom();
      
        $x = new Cachorro();
        $x->setPeso(2);
        $x->setIdade(3);
        $x->setMenbro("4 PATAS");
        $x->setCorPelo("Verde");
        print_r($x);
        $x->locomover();
        $x->alimentar();
        $x->abanarRabo();
        $x->enterrarOsso();
        $x->emitirSom();
       
        $K = new Arara();
        $K->setPeso(3.5);
        $K->setIdade(2);
        $K->setMenbro("Arara Brasileira");
        $K->setCorPena("Branco, Verde e Azul");
        print_r($K);
        $K->locomover();
        $K->alimentar();
        $K->emitirSom();
        $K->fazerNinho();
        ?>
    
        
    </pre>
    
</body>
</html>
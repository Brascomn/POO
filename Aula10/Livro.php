<?php 

require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $tiulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

function detalhes(){
    echo "<br>O Livro ' ".$this->titulo."' foi escrito por ".$this->autor;
    echo "<br>O Livro contem ".$this->totPaginas.", a página atual é ".$this-> getPagAtual() ;
     echo " Sendo Lido por ".$this->leitor ->getNome();

} 

function getTitulo(){
    return $this->titulo;
}
function getAutor(){
    return $this->autor;
}
function getTotPaginas(){
    return $this->totPaginas;
}
function getPagAtual(){
    return $this->pagAtual;
}
function getAberto(){
    return $this->aberto;
}
function getLeitor(){
    return $this->leitor;
}
function setTitulo($titulo){
    $this->titulo=$titulo;
}
function setAutor($autor){
    $this->autor=$autor;
}
function setTotPaginas($totpaginas){
    $this->totPaginas=$totpaginas;
}
function setPagtual($pagatual){
    $this->pagAtual=$pagatual;
}
function setAberto($aberto){
    $this->abeto=$aberto;
}
function setLeitor($leitor){
    $this->leitor=$leitor;
}

function __construct($ti,$aut,$toPag,$lei) {
    $this->titulo=$ti;
    $this->autor=$aut;
    $this->aberto=false;
    $this->pagAtual=0;
    $this->totPaginas=$toPag;
    $this->leitor=$lei;
}
public function abrir(){
    $this->aberto=true;
}
public function fechar(){
    $this->fechar=false;
}
public function folhear($p){
    if ($p>$this->totPaginas) {
        $this->pagAtual;
    }else {
        $this->pagAtual=$p;
    }
}
public function voltarPag(){
    $this->pagAtual --;
    

}
public function avancarPag($m) {
    if ($this->aberto) {
        if ($this->pagAtual + $m <= $this->totPaginas) {
            $this->pagAtual += $m;
            echo "<p>Páginas avançadas: $m</p>";
        } else {
            echo "<p>Não é possível avançar $m páginas. O livro tem apenas {$this->totPaginas} páginas.</p>";
        }
    } else {
        echo "<p>O livro está fechado. Abra o livro para avançar páginas.</p>";
    }
}
/*
Verificação de Abertura do Livro ($this->aberto):

O primeiro if verifica se o livro está aberto ($this->aberto). Se estiver fechado, a mensagem correspondente será exibida, indicando que o livro precisa ser aberto para avançar páginas.
Verificação de Páginas Disponíveis para Avançar ($this->pagAtual + $m <= $this->totPaginas):

Dentro do primeiro if, há outro if que verifica se, somando a quantidade de páginas atual ($this->pagAtual) com o número de páginas a serem avançadas ($m), não ultrapassa o total de páginas do livro ($this->totPaginas).
Se a condição for verdadeira, significa que é possível avançar as páginas desejadas. Nesse caso, o número de páginas atual ($this->pagAtual) é atualizado, somando-se a quantidade de páginas a serem avançadas ($m).
Além disso, uma mensagem é exibida indicando quantas páginas foram avançadas.
Mensagem de Erro em Caso de Páginas Insuficientes:

Se a condição do segundo if não for atendida (ou seja, não é possível avançar $m páginas sem ultrapassar o total de páginas), uma mensagem de erro é exibida indicando que não é possível avançar o número especificado de páginas, pois o livro tem apenas $this->totPaginas páginas.
Mensagem de Erro em Caso de Livro Fechado:

Se o livro estiver fechado, a mensagem indicando que o livro precisa ser aberto para avançar páginas será exibida.
Espero que isso ajude a esclarecer o funcionamento do bloco if no contexto do método avancarPag. */
}
?>
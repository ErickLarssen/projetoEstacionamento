<?php
    //Conectando a classe ao projeto
    namespace Projeto\projetoEstacionamento\php;
    //Cololar qual classe eu utilizar
    require_once("Funcionario.php");
    //Mostrar quem eu vou usar - reforço
    use Projeto\projetoEstacionamento\php\Funcionario;
     //Instanciando um objeto da classe pessoa / Cadastrando
 
    $funcionario1 = new Funcionario('742021', "Miguel", "Manobrista", 1900, 18/05/1997, "av lucas nogueira garcez 169", '1191898-7822');
    echo $funcionario1->imprimir()."<br>";
 
 
 
 
 
?>
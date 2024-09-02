<?php
    //Conectando a classe ao projeto
    namespace Projeto\projetoEstacionamento\php;
    //Cololar qual classe eu utilizar
    require_once("Controle.php");
    //Mostrar quem eu vou usar - reforço
    use Projeto\projetoEstacionamento\php\Controle;
     //Instanciando um objeto da classe pessoa / Cadastrando
 
   
    $cliente1 = new Controle('581210', '08:00', '16:00', '20/0/2024', "Chevrolet Onix", 50);
    echo $cliente1->imprimir()."<br>";
   
 
?>    
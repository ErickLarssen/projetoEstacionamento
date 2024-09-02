<?php
    //Conectando a classe ao projeto
    namespace Projeto\projetoEstacionamento\php;
    //Cololar qual classe eu utilizar
    require_once("Funcionario.php");
    require_once("Controle.php");
    require_once("Mensalista.php");
    //Mostrar quem eu vou usar - reforço
    use Projeto\projetoEstacionamento\php\Funcionario;
    use Projeto\projetoEstacionamento\php\Controle;
    use Projeto\projetoEstacionamento\php\Mensalista;
     //Instanciando um objeto da classe pessoa / Cadastrando
 
    $funcionario1 = new Funcionario('742021', "Miguel", "Manobrista", 1900, 18/05/1997, "av lucas nogueira garcez 169", '1191898-7822');
    echo $funcionario1->imprimir()."<br>";
 
    $cliente1 = new Controle('581210', '08:00', '16:00', '20/0/2024', "Chevrolet Onix", 50);
    echo $cliente1->imprimir()."<br>";
 
    $mensalista1 = new Mensalista("Lucas", "1195859-5993", "Arlindo januario de almeida 381", "Fiat Argo", "BRA2E21", "vermelho", "20/08", 300);
    echo $mensalista1->imprimir()."<br>";
 
 
 
 
?>
<?php
    //Conectando a classe ao projeto
    namespace Projeto\projetoEstacionamento\php;
    //Cololar qual classe eu utilizar
    require_once("Mensalista.php");
    //Mostrar quem eu vou usar - reforço
    use Projeto\projetoEstacionamento\php\gerarRelatorioMensalista;
    use Projeto\projetoEstacionamento\php\Mensalista;
     //Instanciando um objeto da classe pessoa / Cadastrando
 
 
    $mensalista1 = new Mensalista("Lucas", "1195859-5993", "Arlindo januario de almeida 381", "Fiat Argo", "BRA2E21", "vermelho", "20/08", 300);
    echo $mensalista1->imprimir()."<br>";
 
?>
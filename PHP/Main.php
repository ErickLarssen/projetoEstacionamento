<?php
  namespace Projeto\ProjetoEstacionamento\PHP;
    //Colocar qual classe eu utilizar
    require_once("Funcionario.php");
    require_once("Mensalista.php");
    require_once("Controle.php");
    require_once("Relatorio.php");
    use Projeto\ProjetoEstacionamento\PHP\Relatorio;
    use Projeto\ProjetoEstacionamento\PHP\Funcionario;
    use Projeto\ProjetoEstacionamento\PHP\Mensalista;
    use Projeto\ProjetoEstacionamento\PHP\Controle;
 
    $funcionario1 = new Funcionario('742021', "Milton", "Manobrista", 1900, 18/05/1997, "Av. Vergueiro 169", '1191898-7822');
    echo $funcionario1->imprimir()."<br>";
 
    $cliente1 = new Controle('581210', '08:00', '16:00', '20/0/2024', "Volkwagen Nivus", 50);
    echo $cliente1->imprimir()."<br>";
   
    $mensalista1 = new Mensalista("Maurício", "1195859-5993", "Rua das Nações Unidas 41", "Fiat UNO", "BRA2E21", "Prata", "05/03", 300);
    echo $mensalista1->imprimir()."<br>";
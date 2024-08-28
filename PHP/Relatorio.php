<?php
    
    namespace Projeto\ProjetoEstacionamento\PHP;
    require_once("Relatorio.php");
    require_once("Funcionario.php");
    require_once("Mensalista.php");
    require_once("Controle.php");
    use Projeto\ProjetoEstacionamento\PHP\Relatorio;
    use Projeto\ProjetoEstacionamento\PHP\Funcionario;
    use Projeto\ProjetoEstacionamento\PHP\Mensal;
    use Projeto\ProjetoEstacionamento\PHP\Controle;
 
    class Relatorio{
    function gerarRelatorioFuncionario(){    
    $funcionario1 = new Funcionario('742021', "Milton", "Manobrista", 1900, 18/05/1997, "Av. Vergueiro 147", '1191898-7822');
    return $funcionario1->imprimir()."<br>";
    }
 
    function gerarRelatorioControle(){
    $cliente1 = new Controle('581210', '08:00', '16:00', '20/0/2024', "Volkwagen Nivus", 50);
    return $cliente1->imprimir()."<br>";
    }
 
    function gerarRelatorioMensalista(){
    $mensalista1 = new Mensal("Maurício", "1195859-5993", "Rua das Nações Unidas 41", "Fiat UNO", "BRA2E21", "Prata", "05/03", 300);
    return $mensalista1->imprimir()."<br>";
    }
   
    }//Fim da Classe
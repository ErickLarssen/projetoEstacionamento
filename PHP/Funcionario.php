<?php
    namespace Projeto\ProjetoEstacionamento\PHP;
    use Projeto\ProjetoEstacionamento\PHP\Funcionario;
 
    class Funcionario{
        private int $codigo;
        private string $nome;
        private string $cargo;
        private float $salario;
        private string $dataNasc;
        private string $endereco;
        private string $telefone;
   
        public function __construct(
            int $codigo,
            string $nome,
            string $cargo,
            float $salario,
            string $dataNasc,
            string $endereco,
            string $telefone
        ){
            $this->codigo =   $codigo;
            $this-> nome =    $nome;
            $this->cargo =    $cargo;
            $this->salario =  $salario;
            $this->dataNasc =    $dataNasc;
            $this->endereco =   $endereco;
            $this->telefone =   $telefone;
        }
 
        public function __get(string $name):mixed{
            return $this->name;
        }//Fim do "get"
 
        public function __set(string $name, mixed $value):void{
            $this->name = $value;
        }//Fim do "set"
 
        public function imprimir():string{
            return "<br> Informe o codígo do funcionario: ". $this->codigo.
                "<br> Nome do funcionario: ". $this->nome.
                "<br> Cargo do funcionario: ".$this->cargo.
                "<br> Informe o salário: ". $this->salario.
                "<br> Data de nascimento: ". $this->dataNasc.
                "<br> Informe o endereço: ". $this->endereco.
                "<br> informe o telefone: ". $this->telefone;
        }
 
    }//Fim da Classe
 
?>
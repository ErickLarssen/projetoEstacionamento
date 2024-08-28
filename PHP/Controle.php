<?php
    namespace Projeto\ProjetoEstacionamento\PHP;
    use Projeto\ProjetoEstacionamento\php\Controle;
 
    class Controle{
        private int $codigo;
        private string $hrEntrada;
        private string $hrSaida;
        private string $data;
        private string $veiculo;
        private float $valor;
   
 
        public function __construct(
            int $codigoA,
            string $hrEntrada,
            string $hrSaida,
            string $data,
            string $veiculo,
            float $valor
        ){
            $this->codigoA =    $codigoA;
            $this->hrEntrada =  $hrEntrada;
            $this->hrSaida =    $hrSaida;
            $this->data =      $data;
            $this->veiculo =    $veiculo;
            $this->valor =  $valor;
        }
 
        public function __get(string $name):mixed{
            return $this->name;
        }//Fim do "get"
 
        public function __set(string $name, mixed $value):void{
            $this->name = $value;
        }//Fim do "set"
 
    public function imprimir():string{
        return "<br> Informe o codígo aleatorio: ". $this->codigoA.
               "<br> Informe a data: ". $this->data.
               "<br> Horário de entrada: ". $this->hrEntrada.
               "<br> Horário de saída: ".$this->hrSaida.
               "<br> Informe o veículo: ". $this->veiculo.
               "<br> Informe o valor total a ser pago: ". $this->valor;
    }
 
    }//Fim da classe
 
?>
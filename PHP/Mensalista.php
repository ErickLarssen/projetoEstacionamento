<?php
    namespace Projeto\ProjetoEstacionamento\PHP;
    use Projeto\ProjetoEstacionamento\PHP\Mensalista;
 
    class Mensalista{
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $carro;
        private string $placa;
        private string $cor;
        private string $dataPag;
        private float $valorMensal;
   
 
        public function __construct(
            string $nome,
            string $telefone,
            string $endereco,
            string $carro,
            string $placa,
            string $cor,
            string $dataPag,
            float $valorMensal
        ){
            $this->nome =   $nome;
            $this->telefone =    $telefone;
            $this->endereco =    $endereco;
            $this->carro =  $carro;
            $this->placa =    $placa;
            $this->cor  =   $cor;
            $this->dataPag  =   $dataPag;
            $this->valorMensal  =   $valorMensal;
        }
 
        public function __get(string $name):mixed{
            return $this->name;
        }//Fim do "get"
   
        public function __set(string $name, mixed $value):void{
            $this->name = $value;
        }//Fim do "set"
 
       
        public function imprimir():string{
            return "<br> O nome do mensalista é: ". $this->nome.
                   "<br> O telefone é: ". $this->telefone.
                   "<br> O endereço é: ". $this->endereco.
                   "<br> O carro é: ". $this->carro.
                   "<br> A placa do carro é: ". $this->placa.
                   "<br> A cor do carro é: ". $this->cor.
                   "<br> A data de pagamento é: ". $this->dataPag.
                   "<br> O valor mensal é: ". $this->valorMensal;
        }
 
       
 
}//Fim da Classe
 
?>
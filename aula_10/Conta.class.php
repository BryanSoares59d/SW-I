<?php 
    class Conta{
        public $Nome;
        public $CPF;
        private $Saldo;

        public function Sacar($valor){
            if($valor > $this->Saldo){
                return "SALDO INSUFICIENTE";
            }else{
                $this->Saldo -= $valor;
                $resultado1 = "Seu saldo atual é de R$" . $this->Saldo;
                return $resultado1;
            }
        }
        public function Depositar($valor){
            $this->Saldo += $valor;
            $resultado = "Seu saldo atual é de R$" . $this->Saldo;
            return $resultado;
        }
        public function ConsultarSaldo(){
            echo "NOME:" . $this->Nome . "<br>";
            echo "CPF:" . $this->CPF . "<br>";
            echo "SALDO:" . $this->Saldo . "<br>";
            echo "<hr>";
        }
    }
?>
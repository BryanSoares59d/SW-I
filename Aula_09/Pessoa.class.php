<?php 
   class Pessoa{
    // Atributos de classe Pessoa
    public $Nome;
    public $Peso;
    public $Altura;

    // Métodos
    public function MostrarDados(){
        echo "Nome da Pessoa: " . $this->Nome . "<br>";
        echo "Altura da Pessoa: " . $this->Altura . "<br>";
        echo "Peso da Pessoa: " . $this->Peso . "<br>";
        echo "<hr>";
    }
   }


?>
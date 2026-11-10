<?php

declare (strict_types=1);

require_once "Combustible.php";

class Coche {
    private string $marca;
    private string $modelo;
    private int $potencia;
    private float $consumo;
    private Combustible $combustible;

    public function __construct(string $marca, string $modelo, int $potencia, float $consumo, Combustible $combustible){
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->potencia=$potencia;
        $this->consumo=$consumo;
        $this->combustible=$combustible;
    }

    public function getMarca():string{
        return $this->marca;
    }
    public function getModelo():string{
        return $this->modelo;

    }
    public function getPotencia():int{
        return $this->potencia;
    }
    public function getConsumo():float{
        return $this->marca;
    }    
    public function getCombustible():Combustible{
        return $this->combustible;
    }
    
    public function __toString() :string {

        return "Marca: " . $this->marca . "\n" .  
               "Modelo: " . $this->modelo . "\n" . 
               "Potencia: " . $this->potencia . "cv\n" . 
               "Consumo: " . $this->consumo . " litros/100km\n" . 
               "Combustible: " . $this->combustible->value . "\n\n";    
    }


}
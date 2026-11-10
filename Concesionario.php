<?php

declare (strict_types=1);

require_once "Combustible.php";
require_once "Coche.php";

class Concesionario {
    private array $coches;


    public function addCoche(Coche $coche):void{
        $this->coches[]=$coche;
    }


    public function getCochePorCombustible (Combustible $combustible):array{
        $resultado = [];
        foreach($this->coches as $coche){
            if ($coche->getCombustible()===$combustible){
                $resultado[]=$coche;
            }
        }
        return $resultado;
    }

    public function getCocheMasPotente():Coche{
        $cocheMasPotente= 0;
        $totalCoches = count($this->coches);
        for ($i=0; $i<$totalCoches; $i++){
            if($this->coches[$i]->getPotencia()>$cocheMasPotente){
                $cocheMasPotente=$this->coches[$i]->getPotencia();
                $cocheSeleccionado=$this->coches[$i];
            }
        }
        return $cocheSeleccionado;
    }
      
     public function getCocheMenosPotente():Coche{
        $cocheSeleccionado = $this->coches[0];
        $totalCoches = count($this->coches);

        for ($i=0; $i<$totalCoches; $i++){
            if($this->coches[$i]->getPotencia()<$cocheSeleccionado->getPotencia()){
                $cocheSeleccionado=$this->coches[$i];
            }
        }
        return $cocheSeleccionado;
    }

}

 
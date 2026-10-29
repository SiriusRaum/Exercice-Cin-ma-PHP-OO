<?php

class BilletEnfant extends BilletPleinTarif{

    private int $age;

    public function __construct(int $newNumero, float $newPrix, Seance $newSeance, int $newAge = 0){
        parent::__construct($newNumero, $newPrix, $newSeance);
        $this->age = $newAge;
    }

    public function getAge():int{
        return $this->age;
    }
    public function setAge(int $newAge):void{
        $this->age = $newAge;
    }
    public function calculerPrix(?int $newAge = null):float{

        if($newAge !== null){
            $this->age = $newAge;
        }
        return $this->getPrix();
    }
}
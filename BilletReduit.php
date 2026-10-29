<?php

class BilletReduit extends BilletPleinTarif{

    private string $justificatif;


    public function __construct(int $newNumero, float $newPrix, Seance $newSeance, string $newJustificatif = ""){
      
        parent::__construct($newNumero, $newPrix, $newSeance);
        $this->justificatif = $newJustificatif;
    }
   
    public function getJustificatif():string{
        return $this->justificatif;
    }
    public function setJustificatif(string $newJustificatif):void{
        $this->justificatif = $newJustificatif;
    }
   
    public function calculerPrix(?string $newJustificatif = null):float{
        if($newJustificatif !== null){
            $this->justificatif = $newJustificatif;
        }
        return $this->getPrix() * 0.30;
    }
}
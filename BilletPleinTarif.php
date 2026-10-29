<?php

class BilletPleinTarif{

    private int $numero;
    private float $prix;
    private Seance $seance; 

    public function __construct(int $newNumero, float $newPrix, Seance $newSeance){
        $this->numero = $newNumero;
        $this->prix = $newPrix;
        $this->seance = $newSeance;
    }

    public function getNumero():int{
        return $this->numero;
    }
    public function setNumero(int $newNumero):void{
        $this->numero = $newNumero;
    }

    public function getPrix():float{
        return $this->prix;
    }
    public function setPrix(float $newPrix):void{
        $this->prix = $newPrix;
    }
    public function getSeance():Seance{
        return $this->seance;
    }
    public function setSeance(Seance $newSeance):void{
        $this->seance = $newSeance;
    }
    public function calculerPrix():float{
        return $this->prix;
    }

    public function imprimerDetail():void{

        echo("Billet n°".$this->numero."<br>");
        echo("Séance : ".$this->seance->getDate()." à ".$this->seance->getHeure()."<br>");
    }
}
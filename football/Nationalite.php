<?php

class Nationalite{
    private string $libelle;
    private Joueur $joueur;


    public function __construct($libelle, Joueur $joueur){
        $this->libelle = $libelle;
        $this->joueur = $joueur;
        $joueur->addNationalite($this);
    }

    public function getLibelle(){
        return $this->libelle;
    }

    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }

    public function __toString(){
        return $this->getLibelle();
    }

}
<?php

class Jouer{
    private Joueur $joueur;
    private Equipe $equipe;
    private string $anneeDebutSaison;
    // private DateTime $anneeDebutSaison;


    public function __construct(Joueur $joueur, Equipe $equipe, string $anneeDebutSaison){
        $this->joueur = $joueur;
        $this->equipe = $equipe;
        $this->anneeDebutSaison = $anneeDebutSaison;

        $joueur->addJouer($this);
        $equipe->addJouer($this);

    }

    public function getJoueur(){
        return $this->joueur;
    }

    public function setJoueur($joueur){
        $this->joueur = $joueur;
    }

    public function getEquipe(){
        return $this->equipe;
    }

    public function setEquipe($equipe){
        $this->equipe = $equipe;
    }

    public function getAnneeDebutSaison(){
        return $this->anneeDebutSaison;
    }

    public function setAnneeDebutSaison($anneeDebutSaison){
        $this->anneeDebutSaison = $anneeDebutSaison;
    }



    public function __toString(){
        return $this->getJoueur() . $this->getEquipe() . $this->getAnneeDebutSaison();
    }

}
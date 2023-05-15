<?php

class Equipe{
    private string $nom;
    private DateTime $dateDeCreation;
    private Pays $pays;

    private array $jouer;


    public function __construct($nom, $dateDeCreation, Pays $pays){
        $this->nom = $nom;
        $this->dateDeCreation = new DateTime($dateDeCreation);
        $this->pays = $pays;
        $pays->addEquipe($this);

        $this->jouer = [];
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getDateDeCreation(){
        return $this->dateDeCreation->format("Y");
    }

    public function setDateDeCreation($dateDeCreation){
        $this->dateDeCreation = new DateTime($dateDeCreation);
    }


    // fonction pour ajouter des équipes au tableau "jouer"
    public function addJouer(Jouer $jouer){
        $this->jouer[] = $jouer;
    
    }


    // fonction pour afficher les joueurs d'une équipe
    public function afficherJoueur(){
        echo "<strong>" . $this->getNom() . "</strong><br>";
        echo $this->pays . " - " . $this->getDateDeCreation() . "<br>";
        echo "<br>";
        foreach($this->jouer as $jouer){
            echo "<br>";
            echo $jouer->getJoueur() . " (" . $jouer->getAnneeDebutSaison() . ") ";
        }
        
    }

    public function __toString(){
        return $this->getNom(). $this->getDateDeCreation();
    }

}
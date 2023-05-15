<?php

class Joueur{
    private string $nom;
    private string $prenom;
    private array $nationalites;
    private DateTime $dateDeNaissance;

    private array $jouer;


    public function __construct($nom, $prenom, $dateDeNaissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->nationalites = []; // création du tableau de nationnalité
        $this->dateDeNaissance = new DateTime($dateDeNaissance);

        $this->jouer = [];
    }


    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getDateDeNaissance(){
        return $this->dateDeNaissance->format("Y");
    }

    public function setDateDeNaissance($dateDeNaissance){
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
    }


    // fonction pour ajouter une nationalité 
    public function addNationalite(Nationalite $nationalite){
        $this->nationalites[] = $nationalite;
    }


    // fonction pour afficher la nationalité d'un joueur
    public function afficherNationalite(){
        foreach($this->nationalites as $nationalite){
            return $nationalite;
        }
    }

    // fonction pour calculer l'âge du joueur
    public function calculerAge(){
        $now = new DateTime();
        $dateDeNaissance = new DateTime($this->getDateDeNaissance());
        $age = date_diff($now, $dateDeNaissance)->format("%Y");
        return $age;
    }

    // fonction pour ajouter des équipes dans le tableau "jouer"
    public function addJouer(Jouer $jouer){
        $this->jouer[] = $jouer;

    }


    // fonction pour afficher les équipes d'un joueur
    public function afficherEquipe(){
        echo "<strong>" . $this->getPrenom() . " " . $this->getNom() . "</strong><br>";
        echo $this->afficherNationalite() . " - " . $this->calculerAge() . "ans <br>";
        echo "<br>";
        foreach($this->jouer as $jouer){
            echo "<br>";
            echo $jouer->getEquipe() . " (" . $jouer->getAnneeDebutSaison() . ") ";
        }
    }

 
    public function __toString(){
        return $this->getPrenom() . " " . $this->getNom() ;
    }

}
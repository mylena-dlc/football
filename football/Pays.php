<?php

class Pays{
    private string $nom;
    private array $equipes;


    public function __construct($nom){
        $this->nom = $nom;
        $this->equipes = []; // création d'un tableau d'équipe
    }

    // fonction pour ajouter des équipes au pays
    public function addEquipe(Equipe $equipe){
        $this->equipes[] = $equipe;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }



    // fonction pour afficher les équipes d'un pays
    public function afficherEquipe(){
        echo "<h3>" . $this->getNom() . "</h3>";
        echo "<br>";
        foreach($this->equipes as $equipe){
            echo "<br>";
            echo $equipe . " " ;
        }
    }


    public function __toString(){
        return $this->getNom();
    }

}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice Foot</title>
</head>

<body>

    <?php
        require "Pays.php";
        require "Equipe.php";
        require "Joueur.php";
        require "Jouer.php";
        require "Nationalite.php";


    $pays1 = new Pays("France");
    $pays2 = new Pays("Espagne");
    $pays3 = new Pays("Angleterre");
    $pays4 = new Pays("Italie");
    $pays5 = new Pays("Portugal");

    $equipe1 = new Equipe("PSG", "1970", $pays1);
    $equipe2 = new Equipe("Racing Club Stras", "1906", $pays1);
    $equipe3 = new Equipe("FC Barcelone", "1899", $pays2);
    $equipe4 = new Equipe("Juventus", "1897", $pays4);
    $equipe5 = new Equipe("Real Madrid", "1902", $pays2);
    $equipe5 = new Equipe("Manchester United", "1878", $pays3);


    $joueur1 = new Joueur("Mbappé", "Killian", "28-12-1998");
    $joueur2 = new Joueur("Ronaldo", "Christiano", "05-02-1985");
    $joueur3 = new Joueur("Messi", "Lionel", "24-06-1987");
    $joueur4 = new Joueur("Junior", "Neymar", "05-02-1992");




    $nationalite1 = new Nationalite("France", $joueur1);
    $nationalite2 = new Nationalite("Portugal", $joueur2);
    $nationalite3 = new Nationalite("Argentine", $joueur3);
    $nationalite4 = new Nationalite("Brésil", $joueur4);


    $jouer1 = new Jouer($joueur1, $equipe1, "2017");
    $jouer2 = new Jouer($joueur3, $equipe1,"2021");
    $jouer3 = new Jouer($joueur4, $equipe1,"2017");


    $jouer4 = new Jouer($joueur4, $equipe3,"2013");
    $jouer5 = new Jouer($joueur3, $equipe3,"2004");

    $jouer5 = new Jouer($joueur2, $equipe4,"2018");

    ?>

    <h1>Exercice Foot</h1>

    <br>

    <h2> Lister toutes les équipes d'un pays </h2>

    <div id="card">

    <div class="equipe">
        <div class="card_equipe">

            <?php $pays1->afficherEquipe(); ?>

        </div>

        <div class="card_equipe">

            <?php $pays2->afficherEquipe(); ?>

        </div>
   
        <div class="card_equipe">

            <?php $pays3->afficherEquipe(); ?>

        </div>

        <div class="card_equipe">

        <?php $pays4->afficherEquipe(); ?>

        </div>

    </div>

    <h2>Lister tous les joueurs d'une équipe</h2>

    <div class="joueur">
        <div class="card_joueur">

            <?php $equipe1->afficherJoueur(); ?>

        </div>
        <div class="card_joueur">

            <?php $equipe2->afficherJoueur(); ?>

        </div>
        <div class="card_joueur">

            <?php $equipe3->afficherJoueur(); ?>

        </div>
        <div class="card_joueur">

            <?php $equipe4->afficherJoueur(); ?>

        </div>  
    </div>


    <h2>Lister toutes les équipes d'un joueur</h2>


    <div class="equipe_joueur">
        <div class="card_carriere">

            <?php $joueur1->afficherEquipe(); ?>

        </div>
        <div class="card_carriere">

            <?php $joueur2->afficherEquipe(); ?>

        </div>
        <div class="card_carriere">

            <?php $joueur3->afficherEquipe(); ?>

        </div>
        <div class="card_carriere">

            <?php $joueur3->afficherEquipe(); ?>

        </div>
    </div>
    
</div>

</body>
</html>
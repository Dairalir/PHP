<?php
    include ("Employes.class.php");

    $employe1 = new Employe("Light", "Johanna", new DateTime("2018-09-24"), "Vendeur", 45000, "Commerciale" );
    $magasin1 = new Magasin("kiloutou", "rue de truc", 80000, "Amiens", true);
    /*$employe2 = new Employe();
    $employe3 = new Employe();
    $employe4 = new Employe();
    $employe5 = new Employe();*/

    echo $employe1->dateDiff();
    $employe1->displayInfoP();
    ?>
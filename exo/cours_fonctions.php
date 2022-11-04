<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
</head>
<body>
    <?php
    /*function bonjour($prenom, $nom) 
    {
        echo "Bonjour ".$prenom." ".$nom;
    }   
    bonjour("Dave","LOPER");

    $a = $b = 2;

function somme() { 
    global $a, $b; 
    $c = $a + $b; 
    echo "$c"; 
} 

somme(); 

function Test() { 
    static $a=0; 
    echo $a."<br>"; 
    $a++; 
} 

 // Appel de la fonction (2 fois)
Test(); 
Test(); 
Test();*/

/*function lien($target, $link)
{
    print("<a href='$target'>$link</a>");
}
    lien("https://www.reddit.com/","Reddit Hug");

    $tab = array(4, 3, 8, 2);
    function somme($tab){
    $resultat = array_sum($tab);
    echo $resultat;
    }
    somme($tab);*/

    $mdp = "TopSecret42";
    function complex_mdp($mdp){
    if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,50}$/', $mdp)) {
        echo "Your mdp is ok.";
    } else {
        echo "Wrong mdp.";
    }
}
$resultat = complex_mdp($mdp);
echo $resultat;
    ?>
</body>
</html>
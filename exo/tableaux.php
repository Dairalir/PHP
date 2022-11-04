<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tableaux</title>
        </head>
        <body>
            <?php 
            /*$nombre = 0;
            while ($nombre < 150){
                $nombre++;
                if ($nombre % 2 != 0) {
                    echo $nombre;
                }
            }
            //echo str_repeat("Je dois faire des sauvegardes régulières de mes fichiers", 500);
            
            ?>
		<?php
        $tab = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
        
        echo "<table border='1'>";
        echo "<tr style='font-weight: bold;'>";
        echo "<td >X</td>";
        
        foreach($tab as $val){
            echo "<td>$val</td>";
        }
        
        echo "</tr>";

        foreach($tab as $val2){
            echo "<tr>" ;
            echo "<td style='font-weight: bold;'>$val2</td>";

            foreach($tab as $val){
                echo "<td>" . $val2*$val . "</td>";
            }

            echo "</tr>";
        }
        echo "</table>";
        


        echo "<table border='1'>";
        echo "<tr style='font-weight: bold;'>";
        echo "<td>X</td>";

        for ($r =0; $r <= 12; $r++){
            echo "<td>$r</td>" ;
        }
        echo "</tr>";

        for ($c = 0; $c <= 12; $c++){
            echo "<tr>";
            echo "<td style='font-weight: bold;'>$c</td>";

            for ($r =0; $r <= 12; $r++){
            echo "<td>" . $c*$r ."</td>";
            }
            echo "</tr>";
        }
        
        echo"</table>";
        ?>

        <?php
        /*
        $mois = array(
            "Janvier" => 31,
            "Février" => 28,
            "Mars" => 31,
            "Avril" => 30,
            "Mai" => 31,
            "Juin" => 30,
            "Juillet" => 31,
            "Août" => 30,
            "Septembre" => 31,
            "Octobre" => 30,
            "Novembre" => 31,
            "Décembre" => 30,
        );
        asort($mois);
        foreach($mois as $valeur => $jour){
            echo($valeur."=".$jour."<br>");
        }
*/
        $capitales = array(
            "Bucarest" => "Roumanie",
            "Bruxelles" => "Belgique",
            "Oslo" => "Norvège",
            "Ottawa" => "Canada",
            "Paris" => "France",
            "Port-au-Prince" => "Haïti",
            "Port-d'Espagne" => "Trinité-et-Tobago",
            "Prague" => "République tchèque",
            "Rabat" => "Maroc",
            "Riga" => "Lettonie",
            "Rome" => "Italie",
            "San José" => "Costa Rica",
            "Santiago" => "Chili",
            "Sofia" => "Bulgarie",
            "Alger" => "Algérie",
            "Amsterdam" => "Pays-Bas",
            "Andorre-la-Vieille" => "Andorre",
            "Asuncion" => "Paraguay",
            "Athènes" => "Grèce",
            "Bagdad" => "Irak",
            "Bamako" => "Mali",
            "Berlin" => "Allemagne",
            "Bogota" => "Colombie",
            "Brasilia" => "Brésil",
            "Bratislava" => "Slovaquie",
            "Varsovie" => "Pologne",
            "Budapest" => "Hongrie",
            "Le Caire" => "Egypte",
            "Canberra" => "Australie",
            "Caracas" => "Venezuela",
            "Jakarta" => "Indonésie",
            "Kiev" => "Ukraine",
            "Kigali" => "Rwanda",
            "Kingston" => "Jamaïque",
            "Lima" => "Pérou",
            "Londres" => "Royaume-Uni",
            "Madrid" => "Espagne",
            "Malé" => "Maldives",
            "Mexico" => "Mexique",
            "Minsk" => "Biélorussie",
            "Moscou" => "Russie",
            "Nairobi" => "Kenya",
            "New Delhi" => "Inde",
            "Stockholm" => "Suède",
            "Téhéran" => "Iran",
            "Tokyo" => "Japon",
            "Tunis" => "Tunisie",
            "Copenhague" => "Danemark",
            "Dakar" => "Sénégal",
            "Damas" => "Syrie",
            "Dublin" => "Irlande",
            "Erevan" => "Arménie",
            "La Havane" => "Cuba",
            "Helsinki" => "Finlande",
            "Islamabad" => "Pakistan",
            "Vienne" => "Autriche",
            "Vilnius" => "Lituanie",
            "Zagreb" => "Croatie"
        );/*
        ksort($capitales);
        foreach($capitales as $val => $pays){
            echo($val." ".$pays."<br>");
        }
        asort($capitales);
        foreach($capitales as $val => $pays){
            echo($pays. " ".$val."<br>");
        }
        $nb = count($capitales);
        echo "le nombre de pays est de ".$nb;

        foreach($capitales as $val => $pays){
            if($val[0] == "B"){
                unset($capitales[$val]);
            }
        }
        //echo print_r($capitales);
        //ou
        foreach($capitales as $val => $pays){
            echo($val." ".$pays."<br>");
        }
        */
        
        $departements = array(
            "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
            "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
            "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
            "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
        );
        /*
        ksort($departements);
        foreach($departements as $region => $departement){
            echo $region . "" . var_dump($departement) . "<br>";
        }
*/
        ksort($departements);
        foreach($departements as $region => $departement){
            foreach($departement as $dep){
                echo $region . " : " . $dep . "<br>";
            }
        }
/*
        ksort($departements);
        foreach($departements as $region => $departement){
            echo "<p>$region</p>";
            foreach($departement as $dep){
                echo $dep . "<br>";
            }
        }
/*
        foreach($departements as $val => $region){
            $nb = count($region);
            echo($val." ".$nb."<br>");
        }
*/
        ?>
        </body>
    </html>
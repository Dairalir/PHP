<?php

$caloriesJacques = (10 * 68) + (6.25 * 168) - (5 * 22) + 5;
$caloriesPierre = (10 * 220) + (6.25 * 110) - (5 * 14) + 5;
$caloriesJeanne = (10 * 58) + (6.25 * 151) - (5 * 122) - 161;
$caloriesJulie = (10 * 80) + (6.25 * 161) - (5 * 12) - 161;

    function calculateBaseCalories($poids, $taille, $age){
        return (10 * $poids)  + (6.25 * $taille) - (5 * $age) ;
    }

    function calculForFemale($poids, $taille, $age){
        $calculf = calculateBaseCalories($poids, $taille, $age) - 161;
        return $calculf ;
    }

    function calculForMale ($poids, $taille, $age) {
        $calculh = calculateBaseCalories($poids, $taille, $age) + 5;
        return $calculh ;
        }
    
    function calculateCalorie($poids, $taille, $age, $isMale){
        if ($isMale){
            return calculForMale($poids, $taille, $age);
        }
        else{
            return calculForFemale($poids, $taille, $age);
        }
    }


$ageGregory = 4;
$ageAdrien = 24;
$ageDairalir = 37;
$ageMarine = 54;

$gregoryPeutEntrer = $ageGregory >= 18;
$adrienPeutEntrer = $ageAdrien >= 18;
$dairalirPeutEntrer = $ageDairalir >= 18;
$marinePeutEntrer = $ageMarine >= 18;

/*je copie la ligne $ageGregory >= 18; dans une nouvelle fonction:

function canEnter() {
    return $ageGregory >= 18;
}
*/

//toutes les parties qui changent, je les mets dans une variable d'entrée:
function canEnter($age) {
    return $age >= 18;
}

$gregoryPeutEntrer = canEnter($ageGregory);
$adrienPeutEntrer = canEnter($ageAdrien);
$dairalirPeutEntrer = canEnter($ageDairalir);
$marinePeutEntrer = canEnter($ageMarine);
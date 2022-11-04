<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates et Heures</title>
</head>
<body>
    <?php
/*$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "2015-12-06";

if (preg_match($datePattern, $date))
{
    echo "Date ".$date." valide.<br>";
}
else
{
    echo "Date ".$date." erronée.<br>";
}

    $date = explode('-','14-07-2019');
    echo date('W',mktime(0,0,0,$date[1],$date[0],$date[2]));
    

    $date1 = new DateTime("2022-07-22");
    $date2 = new DateTime("2022-08-31");
    $diff = $date2->diff($date1)->format("%a");
    echo $diff;

    
    function bissextile($annee) {
	if( (is_int($annee/4) && !is_int($annee/100)) || is_int($annee/400)) {
		echo "oui";
	} else {
		echo "non";
	}
}
bissextile(2022);

function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
var_dump(validateDate('2019-17-32'));

var_dump(checkdate(17, 32, 2019));

echo date("H:i");

$date = new DateTime('2022-07-25');
$date->add(new DateInterval('P1M')); 
echo $date->format('Y-m-d');*/

$timestamp = 1000200000;
$format = "Y-m-d H:i:s";

echo date($format, $timestamp);
    ?>
</body>
</html>
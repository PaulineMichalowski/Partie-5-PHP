<html>
    <head>
        <title>Exercice 4</title>
    </head>
    <body>
<?php
$mois = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
$replace = array(9 => 'août');
$mois = array_replace($mois, $replace);
echo $mois[9];

?>
    </body>
</html>

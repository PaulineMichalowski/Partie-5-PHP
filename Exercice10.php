<html>
    <head>
        <title>Exercice 5</title>
    </head>
    <body>
<?php
$hautsDeFrance = array (
  '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme'
);
foreach($hautsDeFrance as $cle => $element) {
    echo 'Le numéro ' . $cle . ' correspond au département ' . $element . '. ';
}
?>
    </body>
</html>

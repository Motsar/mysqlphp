<?php

$db_server = 'localhost';
$db_andmebaas = 'motsarma_muusikapood';
$db_kasutaja = 'motsarmartiniktk';
$db_salasona = 'Koolipoiss88';
//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}
else
    echo 'ühendus loodud';
?>

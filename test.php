<?php

$db_server = 'localhost';
$db_andmebaas = 'motsarma_muusikapood';
$db_kasutaja = 'motsarma_Test1';
$db_salasona = 'Kalamees123';
//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}
else
    echo 'ühendus loodud';

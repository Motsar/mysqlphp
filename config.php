<?php
//Server,Kasutaja,parool ja andmebaas
$db_server = 'localhost';
$db_database = 'motsarma_muusikapood';
$db_user = 'motsarma_Test1';
$db_password = 'Kalamees123';

//yhenduse loomine
$yhendus = mysqli_connect($db_server,$db_user,$db_password,$db_database);
//yhenduse kontroll
if(!$yhendus) {
    die('Ei saa ühendust andmebaasiga');
}
?>
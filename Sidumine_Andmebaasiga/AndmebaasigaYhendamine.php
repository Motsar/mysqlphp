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

$paring = 'SELECT * FROM Albumid';
$valjund = mysqli_query($yhendus,$paring);

while($rida = mysqli_fetch_assoc($valjund)){
    //var_dump($rida);
    echo '<strong>Album: '.$rida['Artist'].' - '.$rida['Album']. '</strong><br>';
    echo 'Aasta: '.$rida['Aasta'].'<br>';
    echo 'Hind: '.$rida['Hind'].'<br><br>';
}
mysqli_free_result($valjund);
mysqli_close($yhendus);

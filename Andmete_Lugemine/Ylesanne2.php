<!doctype html>
<html lang="est">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include('../config.php');//andmebaasi paroolid ja yhendus on teises failis
$paring = 'SELECT * FROM Albumid';
$valjund = mysqli_query($yhendus, $paring);
echo '<h1>Tabeli albumid sisu ridade kaupa</h1>';
while($rida = mysqli_fetch_assoc($valjund)){
    echo '<strong>Album: ',$rida['Artist'], ' - ' ,$rida['Album'],'</strong><br>';
    echo 'Aasta: ' ,$rida['Aasta'], '<br>';
    echo 'Hind: ' ,$rida['Hind'], '<br><br>';
}
echo '<hr>';
$paring2 = 'SELECT * FROM Albumid ORDER BY CHAR_LENGTH(Artist) ASC';
$valjund2 = mysqli_query($yhendus, $paring2);
echo '<h1>Sorteeritud kasvavalt artisti tähtede arvu järgi</h1>';
while($rida2 = mysqli_fetch_assoc($valjund2)){
    echo '<strong>Album: ',$rida2['Artist'], ' - ' ,$rida2['Album'],'</strong><br>';
}
echo '<hr>';
$paring3 = 'SELECT * FROM Albumid WHERE Aasta >= 2010';
$valjund3 = mysqli_query($yhendus, $paring3);
echo '<h1>Albumid mis on väljalastud 2010 või hiljem</h1>';
while($rida3 = mysqli_fetch_assoc($valjund3)){
    echo '<strong>Album: ',$rida3['Artist'], ' - ' ,$rida3['Album'],'</strong><br>';
}
echo '<hr>';

$paring4 = 'SELECT COUNT(ID) AS Kogus,ROUND(AVG(Hind),2) AS KeskM,ROUND(SUM(Hind),2) AS Summa FROM Albumid ';
$valjund4 = mysqli_query($yhendus, $paring4);
$rida4 = mysqli_fetch_assoc($valjund4);
echo '<strong>Albumite arv: ',$rida4['Kogus'],' | Kesmine Hind:',$rida4['KeskM'],' € | Albumite koguväärtus:',$rida4['Summa'],' €',' </strong><br>';
echo '<hr>';

$paring5 = 'select * from Albumid where Aasta like (select min(Aasta) from Albumid)';
$valjund5 = mysqli_query($yhendus, $paring5);
echo '<h1>Kõige vanema albumi nimi</h1>';
while($rida5 = mysqli_fetch_assoc($valjund5)) {
    echo '<strong>Album: ', $rida5['Artist'], ' - ', $rida5['Album'], '</strong><br>';
}
echo '<hr>';

$paring6 = 'select * from Albumid where Hind>(SELECT AVG(Hind) FROM Albumid)';
$valjund6 = mysqli_query($yhendus, $paring6);
echo '<h1>Albumid, mille hind on kogu keskmisest suurem</h1>';
while($rida6 = mysqli_fetch_assoc($valjund6)) {
    echo '<strong>Album: ', $rida6['Artist'], ' - ', $rida6['Album'], '</strong><br>';
}

mysqli_free_result($valjund);
mysqli_close($yhendus);
?>
    <hr>
    <h1>Otsi...</h1>
    <form method="get" action="">
         Otsi artisti,albumi või aasta järgi!
         <select name="Vali">
             <option value="Artist">Artist</option>
             <option value="Album">Album</option>
             <option value="Aasta">Aasta</option>
         </select><br><br>
         Otsing
         <input type="text" name="otsi">
         <input type="submit" value="otsi...">
    </form>
    <hr>
<?php include('../config.php'); ?>
<?php
if(!empty($_GET['otsi'])) {
    $otsi = $_GET['otsi'];
    $otsi = trim($otsi);
    $otsi = htmlspecialchars($otsi);
    $valik = $_GET['Vali'];

    $paring = 'SELECT * FROM Albumid WHERE '.$valik.' LIKE "%' .$otsi. '%"';
    $valjund = mysqli_query($yhendus, $paring);
    //päringu vastuste arv
    $tulemused = mysqli_num_rows($valjund);

    echo 'Otsingusõna: ' . $otsi . '<br>';
    echo 'Vastused: <br>';
    if($tulemused == 0) {
        echo "Sinu otsingule ei leitud vastust!";
    }
    while ($rida = mysqli_fetch_assoc($valjund)) {
        echo $rida['Artist'], ' - ', $rida['Album'], ' - ', $rida['Aasta'], '<br>';
    }
    mysqli_free_result($valjund);
    mysqli_close($yhendus);
}
?>






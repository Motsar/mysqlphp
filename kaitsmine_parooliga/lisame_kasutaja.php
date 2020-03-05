<?php include('../config.php'); ?>
<?php
//$kasutaja = 'Admin';
//$parool = 'Kalasaba';
//$kasutaja = 'Martin';
//$parool = 'Kalamees123';
$sool = 'siiasinnalabilinna!';
$pass = crypt($parool, @$sool);
$paring = "INSERT INTO kasutajad(kasutaja, parool) VALUES ('$kasutaja','$pass')";
$valjund = mysqli_query($yhendus, $paring);
//päringu vastuste arv
$tulemus = mysqli_affected_rows($yhendus);
if ($tulemus == 1) {
    echo "Kirje edukalt lisatud";
} else {
    echo "Kirjet ei lisatud";
}
mysqli_close($yhendus);

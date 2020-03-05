<?php include('../config.php'); ?>
<?php
$paring = "SELECT Kliendid.Eesnimi, Kliendid.Perenimi, Arved.Arve_nr, Albumid.Artist, Albumid.Album FROM Arved,Kliendid,Albumid WHERE Arved.Kliendid_id=Kliendid.ID AND Albumid.ID=Arved.Albumid_id";
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_assoc($valjund)){
    echo 'Klient: '.$rida['Eesnimi'].' '.$rida['Perenimi'].'<br>';
    echo 'Arve number: '.$rida['Arve_nr'].'<br>';
    echo 'Toote nimetus: '.$rida['Artist'].'-'.$rida['Album'].'<br><br>';
}
mysqli_free_result($valjund);
mysqli_close($yhendus);
?>

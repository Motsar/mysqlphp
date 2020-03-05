<?php
include('../config.php');//andmebaasi paroolid ja yhendus on teises failis
$paring = 'SELECT * FROM Albumid';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_assoc($valjund)){
    echo '<strong>Album: ',$rida['Artist'], ' - ' ,$rida['Album'],'</strong><br>';
    echo 'Aasta: ' ,$rida['Aasta'], '<br>';
    echo 'Hind: ' ,$rida['Hind'], '<br><br>';
}
mysqli_free_result($valjund);
mysqli_close($yhendus);
?>
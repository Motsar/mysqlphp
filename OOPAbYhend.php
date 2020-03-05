<?php
include('config.php');
//päring
$paring = 'SELECT * FROM Albumid WHERE Hind>7';
$valjund = $yhendus->query($paring);
//väljund
echo '<h1>OOP serveriga ühendamine</h1>';
echo '<table style="text-align:left; border:1px solid dodgerblue; border-collapse:collapse;">';
  echo '<tr>';
    echo '<th style="border:3px solid dodgerblue;">Artist</th>';
    echo '<th style="border:3px solid dodgerblue;">Album</th>';
    echo '<th style="border:3px solid dodgerblue;">Aasta</th>';
    echo '<th style="border:3px solid dodgerblue;">Hind</th>';
  echo '</tr>','<br>';
while($rida = $valjund->fetch_assoc()){
    //var_dump($rida);
    echo '<tr style="border:2px solid deeppink">';
    echo '<td style="border:2px solid deeppink">',$rida['Artist'],'</td>';
    echo '<td style="border:2px solid deeppink">',$rida['Album'],'</td>';
    echo '<td style="border:2px solid deeppink">',$rida['Aasta'],'</td>';
    echo '<td style="border:2px solid deeppink">',$rida['Hind'],'</td>';
    echo '<tr>','<br>';
}
echo '</table>';

//yhenduse sulgemine
$yhendus->close();
?>



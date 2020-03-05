<?php include('../config.php'); ?>
<table border="1">
    <?php
    //päring
    $paring = 'SELECT * FROM Albumid';
    $valjund = mysqli_query($yhendus, $paring);
    echo '<h1>Muuda Kustuta ja Lisa!</h1>';
    while($rida = mysqli_fetch_assoc($valjund)){
        echo '<tr>
				<td>'.$rida['Artist'].'</td>
				<td>'.$rida['Album'].'</td>
				<td>'.$rida['Aasta'].'</td>
				<td>'.$rida['Hind'].'</td>
				<td><a href="'.$_SERVER['PHP_SELF'].'?id='.$rida["ID"].'">kustuta</a></td>
				<td><a href="muuda.php?id='.$rida["ID"].'">Muuda</a></td>
			</tr>';
    }

    if(!empty($_GET['id'])){
        //kustutamise päringud
        $id = $_GET['id'];
        $kustuta_paring = "DELETE FROM Albumid WHERE ID='$id'";
        $kustuta_valjund = mysqli_query($yhendus, $kustuta_paring);
        if($kustuta_valjund){
            echo "Rida kustutatud!";
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$_SERVER['PHP_SELF'].'">';
        } else {
            echo "Viga kustutamisel!";
        }
    }

    //ühenduse sulgemine
    mysqli_close($yhendus);

    ?>
</table>
<?php
echo "<h4><a href=\"../Lisamine_Kustutamine/Vorm_andmed_lisam.php\">Lisa album!</a></h4>";

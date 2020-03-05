<?php include('../config.php'); ?>
<?php
//haarame aadressiribalt ID, et täita väljad
if(empty($_GET['id'])){
    die('Sihtmärk jäi valimata!');
} else {
    $id = $_GET['id'];
//väljastamise päring
    $paring = "SELECT * FROM Albumid WHERE ID='$id'";
    $valjund = mysqli_query($yhendus, $paring);
    $rida = mysqli_fetch_assoc($valjund);
//muutmise päring
    if(!empty($_POST['artist'])){
        $artist = htmlspecialchars(trim($_POST['artist']));
        $album = htmlspecialchars(trim($_POST['album']));
        $aasta = htmlspecialchars(trim($_POST['aasta']));
        $hind = htmlspecialchars(trim($_POST['hind']));
        $muuda = "UPDATE Albumid 
		SET Artist='$artist',
		Album='$album',
		Aasta='$aasta',
		Hind='$hind'
		WHERE ID='$id'
		";
        $muuda_db = mysqli_query($yhendus, $muuda);
        if($muuda_db){
            echo "edukalt muudetud, suuname <a href=\"andmete_uuendamine.php\">tagasi</a>";
            echo '<META HTTP-EQUIV="Refresh" Content="2; URL=andmete_uuendamine.php">';
            die();
        } else {
            echo "mingi jama";
        }
    }
    ?>
    <h2>Albumi muutmine</h2>
    <form action="" method="post">
        <table>
            <tr><td>Artist: </td><td><input type="text" name="artist" required value="<?php echo $rida['Artist']; ?>"></td></tr>
            <tr><td>Album:</td><td> <input type="text" name="album" required value="<?php echo $rida['Album']; ?>"></td></tr>
            <tr><td>Aasta: </td><td><input type="number" name="aasta" value="<?php echo $rida['Aasta']; ?>" min="1900" max="2099" required></td></tr>
            <tr><td>Hind: </td><td><input type="number" name="hind" value="<?php echo $rida['Hind']; ?>" min="1" max="100" step="0.01" required></td></tr>
            <tr><td><input type="reset" value="Tühjenda"></td><td><input type="submit" value="MUUDA"></td></tr>
        </table>
    </form>
    <?php
}
?>

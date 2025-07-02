<!DOCTYPE html>
<html>
<body>

<h1>Contoh Form dengan Method GET</h1>

<?php
if (isset($_GET['nama'])) { 
    $nama = htmlspecialchars($_GET['nama']); 
    echo "Halo, " . $nama . "!";
}
?>

<br>

<form method="get" action="superglobals_get.php"> Nama: <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>

</body>
</html>
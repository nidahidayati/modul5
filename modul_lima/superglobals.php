<!DOCTYPE html>
<html>
<body>

<form method="post" action="14_superglobals.php">
Nama: <input type="text" name="nama">
<br>
<input type="submit">
</form>

<?php
if (isset($_POST['nama'])) {
    $nama = htmlspecialchars($_POST['nama']);
    echo "Halo, " . $nama . "!";
}
?>
</body>
</html>
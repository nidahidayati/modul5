<?php
// Mendefinisikan sebuah array
$daftar_buah = ["Apel", "Mangga", "Pisang", "Jeruk", "Anggur"];

echo "<h2>Daftar Buah:</h2>";

// Menggunakan perulangan foreach untuk menampilkan setiap elemen dari array
foreach ($daftar_buah as $buah) {
    echo $buah . "<br>";
}

echo "<br>";

// Contoh perulangan for dari modul (tetap disertakan untuk referensi)
echo "<h2>Perulangan For:</h2>";
for ($i = 0; $i < 5; $i++) {
    echo "Perulangan ke-" . ($i + 1) . "<br>";
}

echo "<br>";

// Contoh perulangan while dari modul (tetap disertakan untuk referensi)
echo "<h2>Perulangan While:</h2>";
$angka = 5;
while ($angka > 0) {
    echo "Hitung mundur: " . $angka . "<br>";
    $angka--;
}
?>

</body>
</html>
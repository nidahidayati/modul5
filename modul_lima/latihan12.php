<?php
/**
 * Fungsi untuk menampilkan pesan sapaan berdasarkan nama dan waktu.
 *
 * @param string $nama Nama orang yang akan disapa.
 * @param string $waktu Waktu sapaan (contoh: "Pagi", "Siang", "Sore", "Malam").
 * @return void
 */
function sapa($nama, $waktu) {
    echo "Selamat " . $waktu . ", " . $nama . "!";
}

// Memanggil fungsi sapa dengan parameter yang berbeda
echo "<h2>Sapaan Personal:</h2>";
sapa("Budi", "Pagi"); // Memanggil fungsi untuk "Selamat Pagi, Budi!"
echo "<br>";
sapa("Ani", "Siang"); // Contoh lain
echo "<br>";
sapa("Doni", "Malam"); // Contoh lain

echo "<br><br>";

// Contoh fungsi dari modul (tetap disertakan untuk referensi)
echo "<h2>Contoh Fungsi Diskon dari Modul:</h2>";
function hitung_diskon($harga, $persen_diskon) {
    $potongan = $harga * ($persen_diskon / 100);
    return $harga - $potongan;
}

$harga_baju = 150000;
$harga_setelah_diskon = hitung_diskon($harga_baju, 10); // Diskon 10%
echo "Harga akhir: Rp " . $harga_setelah_diskon;
?>

</body>
</html>
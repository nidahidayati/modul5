<?php
// Mendefinisikan sebuah indexed array yang berisi nama-nama teman sekelas
$teman_sekelas = [
    "Alice",
    "Bob",
    "Charlie",
    "Diana",
    "Eve"
];

echo "<h2>Daftar Teman:</h2>";

// Menggunakan perulangan foreach untuk menampilkan setiap elemen dari array
foreach ($teman_sekelas as $nama_teman) {
    echo $nama_teman . "<br>";
}

echo "<br>";

// Contoh Associative Array dari modul (tetap disertakan untuk referensi) 
echo "<h2>Contoh Associative Array dari Modul:</h2>";
$data_dosen = [
    "nama" => "Ir. ABADI NUGROHO, S.Kom., M.Kom.",
    "nidn" => "1104129002",
    "matkul" => "Pemrograman Web"
];
echo "Dosen Pengampu: " . $data_dosen["nama"]; 
?>

</body>
</html>
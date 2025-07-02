<?php
$kalimat = "STITEK Bontang adalah kampus IT terbaik"; // Kalimat asli 

echo "Kalimat Asli: " . $kalimat . "<br>"; // Menampilkan kalimat asli

// Menggunakan fungsi strtoupper() untuk mengubah semua teks menjadi huruf kapital
$kalimat_kapital = strtoupper($kalimat);
echo "Kalimat Kapital: " . $kalimat_kapital . "<br>";

echo "<br>";

// Contoh lain dari modul (tetap disertakan untuk referensi latihan sebelumnya)
echo "Panjang kalimat: " . strlen($kalimat) . "<br>"; // Menampilkan panjang kalimat 
echo "Jumlah kata: " . str_word_count($kalimat) . "<br>"; // Menampilkan jumlah kata 
echo "Mengganti kata: " . str_replace("terbaik", "favorit", $kalimat); // Mengganti kata 
?>

</body>
</html>
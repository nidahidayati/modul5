<?php
// Mendefinisikan sebuah angka
$angka = -5; // Anda bisa mengubah nilai angka ini untuk menguji berbagai kondisi

echo "Angka yang diperiksa: " . $angka . "<br><br>";

// Menggunakan if-elseif-else statement untuk memeriksa angka
if ($angka > 0) { // Kondisi pertama: jika angka lebih besar dari 0
    echo "Angka tersebut adalah POSITIF.";
} elseif ($angka < 0) { // Kondisi kedua: jika angka lebih kecil dari 0
    echo "Angka tersebut adalah NEGATIF.";
} else { // Kondisi terakhir: jika tidak positif dan tidak negatif (berarti nol)
    echo "Angka tersebut adalah NOL.";
}
?>

</body>
</html>
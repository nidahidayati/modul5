<?php
// Mendefinisikan variabel ukuran baju
$ukuran_baju = "L"; // Anda bisa mengubah nilai ini menjadi "S", "M", "L", atau "XL"

echo "Ukuran baju yang Anda pilih: " . $ukuran_baju . "<br><br>";

// Menggunakan switch statement untuk menampilkan pesan berbeda berdasarkan ukuran baju
switch ($ukuran_baju) {
    case "S":
        echo "Anda memilih ukuran Small. Cocok untuk postur ramping.";
        break;
    case "M":
        echo "Anda memilih ukuran Medium. Ukuran standar yang nyaman.";
        break;
    case "L":
        echo "Anda memilih ukuran Large. Pilihan tepat untuk kenyamanan ekstra.";
        break;
    case "XL":
        echo "Anda memilih ukuran Extra Large. Ukuran terbesar yang tersedia.";
        break;
    default: // Akan dieksekusi jika $ukuran_baju tidak cocok dengan case di atas
        echo "Ukuran yang Anda masukkan tidak valid.";
}
?>

</body>
</html>
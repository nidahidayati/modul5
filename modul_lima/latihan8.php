<?php
// Mengubah nilai variabel agar kondisi terpenuhi
$umur = 18; // Tetap 18, atau bisa diubah menjadi 17 atau lebih 
$sudah_punya_sim = true; // Mengubah dari false menjadi true agar kondisi '&&' terpenuhi 

// Memeriksa kondisi mengemudi
if ($umur >= 17 && $sudah_punya_sim == true) { //
    echo "Anda boleh mengemudi."; // Pesan ini akan ditampilkan jika kondisi terpenuhi 
} else {
    echo "Anda tidak boleh mengemudi."; //
}
?>

</body>
</html>
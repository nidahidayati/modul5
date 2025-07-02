<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }
        h1, h2 {
            color: #0056b3;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group textarea {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1em;
        }
        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            display: block;
            width: 100%;
            box-sizing: border-box;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            margin-bottom: 15px;
            text-align: center;
        }
        .success-message {
            color: green;
            margin-bottom: 15px;
            text-align: center;
        }
        .submitted-data {
            border-top: 1px solid #eee;
            margin-top: 30px;
            padding-top: 20px;
        }
        .submitted-data p {
            margin-bottom: 10px;
        }
        .submitted-data strong {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buku Tamu Digital STITEK Bontang</h1>

        <?php
        $nama_lengkap = "";
        $email = "";
        $pesan = "";
        $error_message = "";
        $success_message = "";

        // Memproses form jika data dikirimkan melalui metode POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") { //
            // Mengambil dan membersihkan input dari form
            $nama_lengkap = htmlspecialchars(trim($_POST['nama_lengkap'] ?? ''));
            $email = htmlspecialchars(trim($_POST['email'] ?? ''));
            $pesan = htmlspecialchars(trim($_POST['pesan'] ?? ''));

            // Validasi input
            if (empty($nama_lengkap) || empty($email) || empty($pesan)) {
                $error_message = "Semua kolom input wajib diisi!"; //
            } else {
                // Jika semua valid, tampilkan pesan sukses dan data
                $success_message = "Terima kasih! Pesan Anda telah terkirim."; //
            }
        }
        ?>

        <h2>Kirim Pesan Anda</h2>
        <?php if (!empty($error_message)): ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <?php if (!empty($success_message) && empty($error_message)): ?>
            <p class="success-message"><?php echo $success_message; ?></p>
        <?php endif; ?>

        <form method="post" action="bukutamu.php">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan/Komentar:</label>
                <textarea id="pesan" name="pesan" required><?php echo $pesan; ?></textarea>
            </div>
            <button type="submit" class="btn-submit">Kirim Pesan</button>
        </form>

        <?php
        // Menampilkan data yang baru saja dikirim jika valid
        if (!empty($success_message) && empty($error_message)) { //
            echo "<div class='submitted-data'>"; //
            echo "<h2>Data Pesan Anda:</h2>"; //
            echo "<p><strong>Nama Lengkap:</strong> " . $nama_lengkap . "</p>"; //
            echo "<p><strong>Alamat Email:</strong> " . $email . "</p>"; //
            echo "<p><strong>Pesan:</strong> " . nl2br($pesan) . "</p>"; //
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
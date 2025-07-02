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
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
            box-sizing: border-box;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            background-color: #ffe0e0;
            border: 1px solid red;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
        }
        .success-message {
            color: green;
            background-color: #e0ffe0;
            border: 1px solid green;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
        }
        .display-area {
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
        .display-area h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .guest-entry {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
        .guest-entry p {
            margin: 5px 0;
            color: #444;
        }
        .guest-entry strong {
            color: #222;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buku Tamu Digital STITEK Bontang</h1>

        <?php
        $nama_lengkap = $email = $pesan_komentar = '';
        $errors = [];
        $display_data = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validasi input
            if (empty($_POST["nama_lengkap"])) {
                $errors[] = "Nama Lengkap tidak boleh kosong.";
            } else {
                $nama_lengkap = htmlspecialchars($_POST["nama_lengkap"]);
            }

            if (empty($_POST["email"])) {
                $errors[] = "Alamat Email tidak boleh kosong.";
            } else {
                $email = htmlspecialchars($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "Format Alamat Email tidak valid.";
                }
            }

            if (empty($_POST["pesan_komentar"])) {
                $errors[] = "Pesan/Komentar tidak boleh kosong.";
            } else {
                $pesan_komentar = htmlspecialchars($_POST["pesan_komentar"]);
            }

            // Jika tidak ada error, tampilkan data
            if (empty($errors)) {
                $display_data = true;
            }
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>">
            </div>
            <div class="form-group">
                <label for="email">Alamat Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label for="pesan_komentar">Pesan/Komentar:</label>
                <textarea id="pesan_komentar" name="pesan_komentar"><?php echo $pesan_komentar; ?></textarea>
            </div>
            <button type="submit">Kirim Pesan</button>
        </form>

        <?php
        if (!empty($errors)) {
            echo '<div class="error-message">';
            foreach ($errors as $error) {
                echo '<p>' . $error . '</p>';
            }
            echo '</div>';
        }

        if ($display_data) {
            echo '<div class="success-message">';
            echo '<p>Terima kasih! Pesan Anda telah terkirim.</p>';
            echo '</div>';
            echo '<div class="display-area">';
            echo '<h2>Pesan Terbaru Anda:</h2>';
            echo '<div class="guest-entry">';
            echo '<p><strong>Nama:</strong> ' . $nama_lengkap . '</p>';
            echo '<p><strong>Email:</strong> ' . $email . '</p>';
            echo '<p><strong>Pesan:</strong> ' . $pesan_komentar . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
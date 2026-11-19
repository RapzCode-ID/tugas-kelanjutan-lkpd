<?php
$nama = "Budi Santoso";
$kelas = "X RPL";
$hobi = "Coding & Main Game";
$warna_latar = "#e90e0e"; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Profil - <?= htmlspecialchars($nama) ?></title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .kartu {
            background-color: <?= htmlspecialchars($warna_latar) ?>;
            color: white;
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .kartu hr {
            border: 0;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            margin: 15px 0;
        }
    </style>
</head>
<body>

    <div class="kartu">
        <h2><?= htmlspecialchars($nama) ?></h2>
        <p>Kelas: <?= htmlspecialchars($kelas) ?></p>
        <hr>
        <p>Hobi: <?= htmlspecialchars($hobi) ?></p>
    </div>

</body>
</html>

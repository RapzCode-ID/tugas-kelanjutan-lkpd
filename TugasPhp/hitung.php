<?php
    echo "<h2>Hasil Perhitungan</h2>";
    $nilai1 = $_POST['angka1'];
    $nilai2 = $_POST['angka2'];

    $hasil = $nilai1 + $nilai2;
    echo "<p>$nilai1 ditambah $nilai2 sama dengan <b>$hasil</b></p>";
    echo "<br><a href='kalkulator.php'>Hitung Lagi</a>";
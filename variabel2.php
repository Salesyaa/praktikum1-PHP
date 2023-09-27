<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jalan = "Medan - B.Aceh";
        $noRumah = "29";
        $blok = "4C";
        $jumlahpenghuni = 3;

        echo "Hasil variabel jalan + variabel noRumah adalah ";
        echo $alamat = $jalan . " " . $noRumah;
        echo "<br>";

        echo "Hasil variabel noRumah + variabel jumlahpenghuni adalah ";
        echo $hasil = (int)$noRumah + $jumlahpenghuni;
        echo "<br>";

        echo "Hasil variabel blok + variabel noRumah adalah ";
        echo $hasil = $blok . " " . $noRumah;
        echo "<br>";
    ?>
</body>
</html>

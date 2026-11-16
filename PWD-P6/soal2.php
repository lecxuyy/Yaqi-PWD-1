<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Perkalian Matriks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: separate;
            border-spacing: 0;
            border: 5px double #000000;
            text-align: center;
            font-size: 20px;
        }
        td {
            border: 1px solid #000000;
            width: 38px;
            height: 38px;
            padding: 0;
            margin: 0;
        }
        .header-hijau {
            background-color: #00FF00;
            color: black;
            font-weight: bold;
        }
        .kotak-bilangan {
            background-color: #FFFFFF;
            color: black;
            font-weight: bold;
            font-size: 13px;
        }
        .genap {
            background-color: #00CED1;
            color: black;
            border: 
        }
        .ganjil {
            background-color: #FFFF00;
            color: black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="kotak-bilangan">bilangan</td>
            <?php
            for ($kolom = 1; $kolom <= 10; $kolom++) {
                echo "<td class='header-hijau'>$kolom</td>";
            }
            ?>
        </tr>
        
        <?php
        for ($baris = 1; $baris <= 10; $baris++) {
            echo "<tr>";
            echo "<td class='header-hijau'>$baris</td>";
            for ($kolom = 1; $kolom <= 10; $kolom++) {
                $hasil = $baris * $kolom;
                $warna = ($hasil % 2 == 0) ? "genap" : "ganjil";
                echo "<td class='$warna'>$hasil</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengulangan</title>
</head>
<body>
    <h3>Pengulangan 1 sampai 10 dan menampilkan bilangan genapnya saja</h3>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dãy số từ 1 đến 200</title>
    <style>
        .so-chan {
            font-weight: bold;
            color: red;
        }

        .so-le {
            font-style: italic;
            color: blue;
        }
    </style>
</head>
<body>
    <?php
        for ($i = 1; $i <= 200; $i++) {
            // Kiểm tra số chẵn lẻ
            if ($i % 2 == 0) {
                echo "<span class='so-chan'>$i</span> ";
            } else {
                echo "<span class='so-le'>$i</span> ";
            }
        }
    ?>
</body>
</html>

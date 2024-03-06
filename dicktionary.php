<?php include("../project/connect/database.php"); ?>
<?php include("../project/dbTables/dbTabWord.php"); ?>
<!DOCTYPE html>
<html lang="ru">
<link href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Словарь</title>

    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h2 {
            text-align: center;
            color: #7f7679;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
            margin: 20px;
        }

        td {
            background-color: #FAF0E6;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <?php require "blocks/header.php" ?>
    <h2>Словарь</h2>

    <div class="container mt-5">
        <table>
            <thead>
                <tr>
                    <th>Иероглиф</th>
                    <th>Значение</th>
                    <th>Пиньинь</th>
                    <th>Часть речи</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fetchData as $row) : ?>
                    <tr>
                        <td><?php echo $row['hieroglyph']; ?></td>
                        <td><?php echo $row['meaning']; ?></td>
                        <td><?php echo $row['pinyin']; ?></td>
                        <td><?php echo $row['part_references']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    
    <?php require "blocks/footer.php" ?>
</body>

</html>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ панель</title>
    <style>
        .container {
            display: flex;
            justify-content: space-around;
            font-size: 20px;

        }

        a {
            text-decoration: none;
            color: red;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div style="text-align:right;">
        <?php if (!empty($_SESSION['login'])) : ?>

            <?php echo "Добро пожаловать, " . $_SESSION['login']; ?>
            <br>
            <a  href="/logout.php">Выйти</a>
            <br>
            
            <div class="container">
                <a href="/admin//dictionary1.php">Словарь</a>
                <a href="/admin/lessonsC.php">Уроки</a>
                <a href="/admin/img.php">Картинки</a>
                <a href="#">Аудио</a>
            </div>


        <?php else :
            echo '<h2>Вы не можете войти в админ-панель</h2>';
            echo '<a href="/">На главную</a>';
        ?>
        <?php endif ?>

    </div>
</body>

</html>
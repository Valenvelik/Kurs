<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Вход в админ-панель</title>
</head>

<body>
    <?php require "blocks/header.php" ?>
    <section class="container">
            <div class="login">
                <h1>Авторизация</h1>
                <form method="post" action="login.php">
                    <label>Логин</label>
                    <input type="text" name="login" value="" placeholder="login">
                    <label>Пароль</label>
                    <input type="password" name="password" value="" placeholder="Пароль">
                    <p class="remember_me">
                        <!--<label>
                            <input type="checkbox" name="remember_me" id="remember_me">
                            Запомнить меня на этом компьютере
                        </label>-->
                    </p><br>
                    <p class="submit"><input type="submit" name="commit" value="Войти" id="loginButton"></p>
                </form>
                
            </div>
        </section>

    <?php require "blocks/footer.php" ?>
</body>
</html>
<?php
// Подключение к базе данных (замените 'hostname', 'username', 'password' и 'database' на свои значения)
$mysqli = new mysqli('localhost', 'root', '', 'Shop');

// Проверка соединения
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Проверка наличия данных в POST запросе
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверка наличия необходимых полей в POST запросе
    if (isset($_POST['login'], $_POST['password'])) {
        // Получение данных из POST запроса
        $email = $_POST['login'];
        $password = $_POST['password'];

        // Подготовка SQL запроса для проверки наличия пользователя в базе данных
        $query = "SELECT * FROM User WHERE login = ?";

        // Подготовка и выполнение запроса
        if ($stmt = $mysqli->prepare($query)) {
            // Привязка параметров к запросу
            $stmt->bind_param("s", $email);

            // Выполнение запроса
            if ($stmt->execute()) {
                // Получение результата запроса
                $result = $stmt->get_result();

                // Проверка наличия пользователя в базе данных
                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $firstName = $row['name'];
                    
                    // Перенаправление на index1.php с передачей имени и фамилии в виде параметров URL
                    header("Location: index.php?name=$firstName");
                    
                    exit();
            } else {
                echo "Ошибка при выполнении запроса: " . $stmt->error;
            }
            }
            // Закрытие запроса
            $stmt->close();
        } else {
            echo "Ошибка при подготовке запроса: " . $mysqli->error;
        }
    } else {
        echo "Необходимые поля не были переданы";
    }
}

// Закрытие соединения с базой данных
$mysqli->close();
?>

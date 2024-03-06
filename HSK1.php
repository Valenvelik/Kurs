<!DOCTYPE html>
<html lang="ru">
<link rel="stylesheet" href="css/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Магазин</title>
</head>

<body>
    <?php require "blocks/header.php" ?>
    <h2 style="text-align: center;">Корзина</h2>
    <div class="basket-block">
        <div class="bb1">
            <<!--ПЕРВЫЙ ТОВАР-------------------------------------------------------------------->
        <div class="card-body">
          <?php
          $image_path = 'img/products/2.png';
          ?>
          <img src="<?php echo $image_path;?>">
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "Shop";

          // Создаем соединение
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Проверяем соединение
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT price, name, size, code FROM Product WHERE id_product = 1";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // выводим данные каждой строки
            while ($row = $result->fetch_assoc()) {
              $price = $row["price"];
              $name = $row["name"];
              $size = $row["size"];
              $code = $row["code"];
              $idPr = $row["id_product"];

              echo $price . "<br>". $name . "<br>". $code . "<br>" . $size;
            }
          } else {
            echo "0 results";
          }

          ?>
          <button type="button" class="but_buy">Купить</button>
          <button type="button" class="but_bas_del">Убрать из корзины</button>
        </div>
    </div>
    <?php require "blocks/footer.php" ?>
</body>

</html>
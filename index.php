<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Catalog</title>
</head>

<body>
  <div class="header">
    <?php require "blocks/header.php" ?>
  </div>
  <div class="container">
    <h1 style="text-align:center; margin:0; padding:2%" class="mb-5">Товары</h1>
    <div class="catalog">
      <div class="catalog-content">

        <!--ПЕРВЫЙ ТОВАР-------------------------------------------------------------------->
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
          <button type="button" class="but_bas">В корзину</button>
        </div>

        <!--ВТОРОЙ ТОВАР------------------------------------------------------------>
        <div class="card-body">
          <?php
          $image_path = 'img/products/1.png';
          ?>
          <img src="<?php echo $image_path;?>">
          <?php
          
          $sql = "SELECT price, name, size, code FROM Product WHERE id_product = 2";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // выводим данные каждой строки
            while ($row = $result->fetch_assoc()) {
              $price = $row["price"];
              $name = $row["name"];
              $size = $row["size"];
              $code = $row["code"];

              echo $price . "<br>". $name . "<br>". $code . "<br>" . $size;
            }
          } else {
            echo "0 results";
          }
          ?>
          <button type="button" class="but_buy">Купить</button>
          <button type="button" class="but_bas">В корзину</button>
        </div>

        <!--ТРЕТИЙ ТОВАР------------------------------------------------------------>
        <div class="card-body">
          <?php
          $image_path = 'img/products/3.png';
          ?>
          <img src="<?php echo $image_path;?>">
          <?php
          
          $sql = "SELECT price, name, size, code FROM Product WHERE id_product = 3";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // выводим данные каждой строки
            while ($row = $result->fetch_assoc()) {
              $price = $row["price"];
              $name = $row["name"];
              $size = $row["size"];
              $code = $row["code"];

              echo $price . "<br>". $name . "<br>". $code . "<br>" . $size;
            }
          } else {
            echo "0 results";
          }
          ?>
          <button type="button" class="but_buy">Купить</button>
          <button type="button" class="but_bas">В корзину</button>
        </div>

        <!--ЧЕТЫЁРТЫЙ ТОВАР------------------------------------------------------------>
        <div class="card-body">
          <?php
          $image_path = 'img/products/2.png';
          ?>
          <img src="<?php echo $image_path;?>">
          <?php
          
          $sql = "SELECT price, name, size, code FROM Product WHERE id_product = 1";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // выводим данные каждой строки
            while ($row = $result->fetch_assoc()) {
              $price = $row["price"];
              $name = $row["name"];
              $size = $row["size"];
              $code = $row["code"];

              echo $price . "<br>". $name . "<br>". $code . "<br>" . $size;
            }
          } else {
            echo "0 results";
          }
          ?>
          <button type="button" class="but_buy">Купить</button>
          <button type="button" class="but_bas">В корзину</button>
        </div>
      </div>

      <div class="catalog-content">
        <!--ПЯТЫЙ ТОВАР------------------------------------------------------------>
        <div class="card-body">
          <?php
          $image_path = 'img/products/1.png';
          ?>
          <img src="<?php echo $image_path;?>">
          <?php
          
          $sql = "SELECT price, name, size, code FROM Product WHERE id_product = 2";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // выводим данные каждой строки
            while ($row = $result->fetch_assoc()) {
              $price = $row["price"];
              $name = $row["name"];
              $size = $row["size"];
              $code = $row["code"];

              echo $price . "<br>". $name . "<br>". $code . "<br>" . $size;
            }
          } else {
            echo "0 results";
          }
          ?>
          <button type="button" class="but_buy">Купить</button>
          <button type="button" class="but_bas">В корзину</button>
        </div>

        <!--ШЕСТОЙ ТОВАР------------------------------------------------------------>
        <div class="card-body">
          <?php
          $image_path = 'img/products/1.png';
          ?>
          <img src="<?php echo $image_path;?>">
          <?php
          
          $sql = "SELECT price, name, size, code FROM Product WHERE id_product = 2";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // выводим данные каждой строки
            while ($row = $result->fetch_assoc()) {
              $price = $row["price"];
              $name = $row["name"];
              $size = $row["size"];
              $code = $row["code"];

              echo $price . "<br>". $name . "<br>". $code . "<br>" . $size;
            }
          } else {
            echo "0 results";
          }
          ?>
          <button type="button" class="but_buy">Купить</button>
          <button type="button" class="but_bas">В корзину</button>
        </div>

        
      </div>
    </div>

  </div>
  <div class="footer">
    <?php require "blocks/footer.php" ?>
  </div>
</body>
<?php
// Подключаем библиотеку PhpSpreadsheet
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Создаем новый документ Excel
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Создаем соединение с базой данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Выполняем SQL-запрос
$sql = "SELECT price, name, size, code FROM Product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Заполняем документ Excel данными
    $rowNumber = 1;
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $rowNumber, $row["price"]);
        $sheet->setCellValue('B' . $rowNumber, $row["name"]);
        $sheet->setCellValue('C' . $rowNumber, $row["size"]);
        $sheet->setCellValue('D' . $rowNumber, $row["code"]);
        $rowNumber++;
    }
} else {
    echo "0 results";
}

// Сохраняем документ Excel
$writer = new Xlsx($spreadsheet);
$writer->save('output.xlsx');
?>

</html>



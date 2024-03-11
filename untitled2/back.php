<?php

// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "saitbd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Запрос к базе данных для получения списка товаров
$sql = "SELECT id, name, price FROM products";
$result = $conn->query($sql);

$result = $conn->query($sql);

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="saitestyle.css">
</head>
<body>
<header>
    <h1>Каталог товаров</h1>
    <!-- Меню навигации -->
    <nav>
        <ul>
            <li><a href="sait.html">Главная</a></li>
            <li><a href="cart-back.php">Корзина</a></li>

        </ul>
    </nav>
</header>
<!-- Содержимое каталога товаров -->
<main>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["name"] . "</h2>";
            echo "<p>Цена: тенге" . $row["price"] . "</p>";
            echo "<form action='cart-back.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='" . $row["id"] . "'>";
            echo "<input type='submit' value='Добавить в корзину'>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "0 результатов";
    }
    ?>
</main>

</body>
</html>

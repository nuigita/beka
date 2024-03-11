<?php
// Начать или возобновить сессию
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="cart.css"> <!-- Подключите свой CSS-файл -->
</head>
<body>
<header>
    <h1>Корзина</h1>
    <nav>
        <ul>
            <li><a href="sait.html">Главная</a></li>
            <
            <li><a href="back.php">Каталог</a></li>
        </ul>
    </nav>
</header>

<main>
    <?php
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        echo "<p>Ваша корзина пуста.</p>";
    } else {
        echo "<h2>Ваша корзина:</h2>";
        foreach ($_SESSION['cart'] as $cart_item) {
            echo "<div class='cart-item'>";
            echo "<h3>" . $cart_item['name'] . "</h3>";
            echo "<p>Цена: $" . $cart_item['price'] . "</p>";
            // Другая информация о товаре, если необходимо
            echo "</div>";
        }
    }
    ?>
</main>


</body>
</html>




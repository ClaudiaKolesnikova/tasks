<!DOCTYPE html>
<html>
<head>
    <title>Задача 3</title>
</head>
<body>
<ul>
    <li><a href="/">Стартовая страница</a></li>
    <li><a href="task1.php">Задание №1</a></li>
    <li><a href="task2.php">Задание №2</a></li>
    <li><a href="task3.php">Задание №3</a></li>
    <li><a href="task4.php">Задание №4</a></li>
    <li><a href="task5.php">Задание №5</a></li>
    <li><a href="task6.php">Задание №6</a></li>
    <li><a href="task7.php">Задание №7</a></li>
    <li><a href="task8.php">Задание №8</a></li>
    <li><a href="task9.php">Задание №9</a></li>
</ul>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $startNumber = $_POST['numberStart'];
    $endNumber = $_POST['numberEnd'];
    $pattern = '#^[0-9]+$#';
    $result = 0;
    if (preg_match($pattern, $startNumber) && preg_match($pattern, $endNumber) && $startNumber >= 20 && $endNumber <= 45) {
        for ($i = $startNumber; $i <= $endNumber; $i++) {
            if (fmod($i, 5) == 0) {
                $result += $i;
            }
        }
    } else {
        $result = "Введите число от 20 до 45";
    }
}
?>

<div>
    <p>Задание №3: Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму
        этих чисел. Рекомендую использовать функцию fmod для определения "делится число" или "не делится".</p>
    <br>

    <form name="form" action="" method="post">
        <p>Введите число:</p>
        <input name="numberStart" type="text" value="<?= $startNumber ?>" placeholder="Введите число"/><br><br>
        <input name="numberEnd" type="text" value="<?= $endNumber ?>" placeholder="Введите число"/><br><br>
        <input id="task1" type="submit" value="Посчитать сумму"/><br>
        <p>Результат:</p>
        <p><? print_r($result) ?></p>
    </form>
</body>
</html>
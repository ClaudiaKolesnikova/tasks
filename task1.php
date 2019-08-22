<!DOCTYPE html>
<html>
<head>
    <title>Задача 1</title>
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
    $numberFromUser = $_POST['number'];
    $pattern = '#^[0-9]+$#';
    $result = 0;
    if (preg_match($pattern, $numberFromUser)) {
        $arNumbers = str_split($numberFromUser);
        for ($i = 0; $i < count($arNumbers); $i++) {
            $result += $arNumbers[$i];
        }
    } else {
        $result = "Введите целое число";
    }
}
?>

<div>
    <p>Задание №1: Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
        Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6
        По желанию можете сделать проверку на корректность введения данных пользователем.</p>
    <br>

    <form name="form" action="" method="post">
        <p>Введите число:</p>
        <input name="number" type="text" value="<?php if(isset($numberFromUser)):?><?= $numberFromUser ?> <?php endif?>" placeholder="Введите число"/><br><br>
        <input id="task1" type="submit" value="Посчитать сумму"/><br>
        <p>Результат:</p>
        <input id="result" type="text" value="<?php if(isset($result)):?><?= $result ?> <?php endif?>"/><br>
    </form>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Задача 2</title>
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
    $numeral = $_POST['numeral'];
    $number = $_POST['number'];
    $count = 0;
    $arNumbers = str_split($number);
    for ($i = 0; $i < count($arNumbers); $i++) {
        if ($arNumbers[$i] == $numeral) {
            $count++;
        }
    }
    $result = 'цифра ' . $numeral . ' в числе ' . $number . ' встречается ' . $count . ' раз';
}
?>

<div>
    <p>Задание №2: Вам нужно разработать программу, которая считала бы количество вхождений какой-нибудь выбранной вами
        цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.
    </p>
    <br>

    <form name="form" action="" method="post">
        <p>Введите цифру:</p>
        <input name="numeral" type="text" value="<?php if(isset($numeral)):?><?= $numeral ?> <?php endif?>" placeholder="Введите цифру"/><br><br>
        <p>Введите число:</p>
        <input name="number" type="text" value="<?php if(isset($number)):?><?= $number ?> <?php endif?>" placeholder="Введите число"/><br><br>
        <input id="task1" type="submit" value="Результат"/><br>
        <p>Результат:</p>
        <p><?php if (isset($result)): ?><?= $result ?><?php endif ?></p>
    </form>
</div>
</body>
</html>

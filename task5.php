<!DOCTYPE html>
<html>
<head>
    <title>Задача 5</title>
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
    $fio = $_POST['fio'];
    $arFio = explode(' ', $fio);
    $initials = '';
    for ($i = 1; $i < count($arFio); $i++) {
        $initials .= mb_substr($arFio[$i], 0, 1) . ". ";
    }
    $result = $arFio[0] . ' ' . $initials;
}
?>

<div>
    <p>Задание №5: Ваши задание будет создание сокращенного варианта ФИО, т. е. вводим: Иванов Иван Петрович и нам
        выводит: Иванов И. П.</p>

    <form name="form" action="" method="post">
        <p>Введите Фамилию Имя Отчество:</p>
        <input name="fio" type="text" value="" placeholder="Введите ФИО полностью"/><br><br>
        <input id="task5" type="submit" value="Результат"/><br>
        <p>Результат:</p>
        <p><?php if (isset($result)): ?><?php print_r($result) ?><?php endif?></p>
    </form>
</div>
</body>
</html>

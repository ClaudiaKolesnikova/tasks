<!DOCTYPE html>
<html>
<head>
    <title>Задача 4</title>
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

<div>
    <p>Задание №4: Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand),
        найти максимальное и минимальное значение массива и поменять их местами.</p>

    <p>
        <?php
        $sizeArray = 5;
        $maxNumber = 0; //max($arNumbers);
        $minNumber = 99; //min($arNumbers);
        $arNumbers = [];
        for ($i = 1; $i <= $sizeArray; $i++) {
            $arNumbers[] = rand($minNumber, $maxNumber);
        }
        echo 'Исходный массив:';
        echo '<pre>';
        print_r($arNumbers);
        echo '</pre>';
        echo "<br>";
        foreach ($arNumbers as $k => $v) {
            if ($v > $maxNumber) {
                $keyMax = $k;
                $maxNumber = $v; // если не использовать функцию max();
            } elseif ($v < $minNumber) {
                $keyMin = $k;
                $minNumber = $v; // если не использовать функцию min();
            }
        }
        $arNumbers[$keyMax] = $minNumber;
        $arNumbers[$keyMin] = $maxNumber;

        echo 'Минимальное значение в массиве:';
        echo '<pre>';
        print_r($minNumber);
        echo '</pre>';
        echo "<br>";

        echo 'Максимальное значение в массиве:';
        echo '<pre>';
        print_r($maxNumber);
        echo '</pre>';
        echo "<br>";

        echo 'Итоговый массив после перастановки минимального и максимального значения:';
        echo '<pre>';
        print_r($arNumbers);
        echo '</pre>';
        ?>
    </p>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Задача 7</title>

    <script>
        window.addEventListener("load", function () {
                var button = document.getElementById("button");
                button.addEventListener("click", function () {
                    var yearFromUser = +(document.getElementById("year").value);
                    var resultYear = document.getElementById("resultYear");
                    if (Number.isInteger(yearFromUser) && yearFromUser > 0 && yearFromUser <= 9999) {
                        if (Number.isInteger(yearFromUser / 400)) {
                            resultYear.innerHTML = "Год високосный";
                        } else if (Number.isInteger(yearFromUser / 100)) {
                            resultYear.innerHTML = "Год невисокосный";
                        } else if (Number.isInteger(yearFromUser / 4)) {
                            resultYear.innerHTML = "Год високосный";
                        } else {
                            resultYear.innerHTML = "Год невисокосный";
                        }
                    } else {
                        resultYear.innerHTML = "Введите год от 1 до 9999";
                    }
                }, false);
            },
            false
        )
        ;
    </script>
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
    <p>Задание №7: Проверить високосный ли год. Вам нужно разработать программу, которая проверяла бы введенное
        пользователем число (год). Число может быть в диапазоне от 1 до 9999.
    </p>

    <form name="form" action="" method="post">
        <p>Введите год от 1 до 9999:</p>
        <input id="year" type="text" value="" placeholder="Введите год"/><br><br>
        <input id="button" type="button" value="Результат"/><br>
        <p>Результат:</p>
        <div id="resultYear"></div>
    </form>
</div>
</body>
</html>

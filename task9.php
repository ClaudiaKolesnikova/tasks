<!DOCTYPE html>
<html>
<head>
    <title>Задача 9</title>
    <script>
        window.addEventListener("load", function () {
            var arr = ["Обезьяна", "Петух", "Собака", "Свинья", "Крыса", "Бык", "Тигр", "Кролик", "Дракон", "Змея", "Лошадь", "Коза"];
            var button = document.getElementById("button");
            button.addEventListener("click", function () {
                var numberFromUser = +(document.getElementById("number").value);
                var resultCard = document.getElementById("nameChina");
                if (Number.isInteger(numberFromUser) && numberFromUser >= 1924) {
                    resultCard.innerHTML = arr[(numberFromUser % 12)];
                } else {
                    resultCard.innerHTML = "Введите число. Заданное число не может быть меньше 1924";
                }
            }, false);
        }, false);
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
    <p>Задание №9: Составить программу, которая бы по заданному числу будет выводить его название по китайскому
        календарю. Заданное число не может быть меньше 1924.
    </p>

    <form name="form" action="" method="post">
        <p>Введите номер:</p>
        <input id="number" type="text" value="" placeholder="Введите число"/><br><br>
        <input id="button" type="button" value="Результат"/><br>
        <p>Результат:</p>
        <div id="nameChina"></div>
    </form>
</div>
</body>
</html>

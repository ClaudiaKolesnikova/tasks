<!DOCTYPE html>
<html>
<head>
    <title>Задача 8</title>

    <script>
        window.addEventListener("load", function () {
            var arr = [];
            arr[2] = "Двойка";
            arr[3] = "Тройка";
            arr[4] = "Четверка";
            arr[5] = "Пятерка";
            arr[6] = "Шестерка";
            arr[7] = "Семерка";
            arr[8] = "Восьмерка";
            arr[9] = "Девятка";
            arr[10] = "Десятка";
            arr[11] = "Валет";
            arr[12] = "Дама";
            arr[13] = "Король";
            arr[14] = "Туз";
            var button = document.getElementById("button");
            button.addEventListener("click", function () {
                var numberFromUser = +(document.getElementById("number").value);
                var resultCard = document.getElementById("resultCard");
                if (Number.isInteger(numberFromUser) && numberFromUser > 1 && numberFromUser < 15) {
                    resultCard.innerHTML = arr[numberFromUser];
                } else {
                    resultCard.innerHTML = "Введите номер от 2 до 14";
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
    <p>Задание №8: Игральным картам присвоены следующие порядковые номера в зависимости от их достоинства: "валет" - 11,
        "дама" - 12, "король" - 13, "туз" - 14 Порядковые номера остальных карт соответствуют их названиям("семерка",
        "восьмерка" и т. д.). Вам нужно разработать программу, которая выводила достоинство карты по заданному номеру,
        который будет вводит пользователь.
    </p>

    <form name="form" action="" method="post">
        <p>Введите номер:</p>
        <input id="number" type="text" value="" placeholder="Введите год"/><br><br>
        <input id="button" type="button" value="Результат"/><br>
        <p>Результат:</p>
        <div id="resultCard"></div>
    </form>
</div>
</body>
</html>

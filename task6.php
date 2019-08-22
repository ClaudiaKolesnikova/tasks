<!DOCTYPE html>
<html>
<head>
    <title>Задача 6</title>
    <style>
        #resultColor {
            width: 100px;
            height: 50px;
        }
    </style>
    <script>
        window.addEventListener("load", function () {
            var button = document.getElementById("button");
            button.addEventListener("click", function () {
                var minuteFromUser = +(document.getElementById("minute").value);
                var resultColor = document.getElementById("resultColor");
                if (Number.isInteger(minuteFromUser) && minuteFromUser >= 0 && minuteFromUser < 60) {
                    if ((minuteFromUser % 5) >= 0 && (minuteFromUser % 5) < 3) {
                        resultColor.innerHTML = "ЗЕЛЕНЫЙ";
                        resultColor.style.backgroundColor = "green";
                    } else {
                        resultColor.innerHTML = "КРАСНЫЙ";
                        resultColor.style.backgroundColor = "red";
                    }
                } else {
                    resultColor.innerHTML = "Введите минуту от 0 до 59";
                    resultColor.style.backgroundColor = "grey";
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
    <p>Задание №6: Работа светофора запрограммирована таким образом: с начала каждого часа, в течении трех минут горит
        зеленый сигнал, следующие две минуты горит красный, дальше в течении трех минут - зеленый и т. д. Вам нужно
        разработать программу, которая по введенному числу определяла какого цвета сейчас горит сигнал. Введенное число
        означает количество минут, прошедших с начала часа.
    </p>

    <form name="form" action="" method="post">
        <p>Введите минуту от 0 до 59:</p>
        <input id="minute" type="text" value="" placeholder="Введите минуту"/><br><br>
        <input id="button" type="button" value="Результат"/><br>
        <p>Результат:</p>
        <div id="resultColor"></div>
    </form>
</div>
</body>
</html>

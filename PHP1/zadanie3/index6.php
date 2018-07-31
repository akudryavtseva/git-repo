<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .menu ul {
            display: none;
            background-color: #976e9d;
            position: absolute;
            top: 100%;
        }
        .menu li:hover ul {
            display: block;
        }
        .menu, .menu ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        .menu {
            height: 30px;
            background-color: #7b7b7b;
            padding-left: 25px;
            min-width: 470px;
        }
        .menu li {
            float: left;
            position: relative;
            height: 100%;
        }
        .menu li a {
            display: block;
            padding: 6px;
            width: 130px;
            color: #fff;
            text-decoration: none;
            text-align: center;
        }
        .menu ul li {
            float: none;
        }
        .menu li:hover {
            background-color: #84497e;
        }
        .menu ul li:hover {
            background-color: #ce8ac8;
        }

    </style>
</head>
<body>

<?php
//вывод одноуровнего меню
echo "<div>";
echo "<ul>";
$arrayMenu = ["Курсы", "Вебинары", "Форум", "Блог", "Обучение", "Тесты"];
for ($i = 0; $i < count($arrayMenu); $i++) {
    echo '<li><a href="#">' . $arrayMenu[$i] . '</a></li>';
}
echo "</ul>";
echo "</div>";

//вывод меню с вложенным подменю
$arrayMenu2 = [
    "Курсы" => ["Веб-разработка", "Мобильная разработка", "Игры и десктоп", "Дизайн", "Другие"],
    "Вебинары" => ["Новые", "Лучшие", "Обсуждаемые"],
    "Форум" => ["HTML", "PHP", "Java", "Python", "IOS разработка", "Android", "MySQL"],
    "Блог" => ["Истории успеха", "Карьера", "Обучение", "Новости", "Развитие", "Все статьи"],
    "Обучение" => ["Активные", "I четверть", "II четверть", "III четверть", "IV четверть", "Вне четверти", "Факультативы"],
    "Тесты" => ["Основы программирования", "HTML&CSS", "JavaScript", "PHP", "Веб-дизайн", "Machine learning","Photoshop"]
];
echo "<div>";
echo "<ul class='menu'>";
foreach ($arrayMenu2 as $key => $value) {
    echo '<li><a href="#">' . $key . '</a>';
    echo "<ul>";
    foreach ($value as $keyMenu => $valueMenu) {
        echo '<li><a href="#">' . $valueMenu . '</a></li>';
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";
echo "</div>";
?>
</body>
</html>

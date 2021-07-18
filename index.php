<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HTML5 Бронювання кімнат в готелі (JavaScript/PHP/MySQL)</title>
    <!-- допоміжні бібліотеки -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- бібліотека daypilot -->
    <script src="js/daypilot-all.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="style.css">
    <script src="js/index.js"></script>
</head>
<body>
<header>
    <div class="bg-help">
        <div class="inBox">
            <h1 id="logo">HTML5 Бронювання кімнат в готелі (JavaScript/PHP)</h1>
            <p id="claim">AJAX'овий Календар-застосунок з JavaScript/HTML5/jQuery</p>
            <hr class="hidden" />
        </div>
    </div>
</header>
<main>
    <div style="width:160px; float:left;">
        <div id="nav">
            Показати кімнати:
            <select id="filter">
                <option value="0">Всі</option>
                <option value="1">Одномісні</option>
                <option value="2">Двомісні</option>
                <option value="4">Сімейні</option>
            </select>
            <div id="dp"></div>
        </div>
    </div>
</main>
<div class="clear">
</div>
<footer>
    <address>(с)Автор лабораторної роботи: студент спеціальності ІНЖЕНЕРІЯ ПРОГРАМНОГО ЗАБЕЗПЕЧЕННЯ, Яремчук Юрій</address>
</footer>
</body>
</html>
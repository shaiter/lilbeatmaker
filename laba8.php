/**
 * Created by PhpStorm.
 * User: artemsajter
 * Date: 6/6/18
 * Time: 16:03
 */

<?php
include 'stat.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1">
    <title>Lil Beatmaker</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header>
    <div class="logo">
        <a href="index.html"><img class="graficlogo" src="img/logo.png" alt="Logo"></a>
    </div>
    <nav>
        <div class="topnav" id="myTopnav">
            <a href="index.html">Главная</a>
            <a href="reading.html">Чтиво</a>
            <a href="labs.php">Лабы</a>
            <a href="in_developing.html">VST Эффекты</a>
            <a href="in_developing.html">Сэмплы</a>
            <a href="about.html">Об авторе</a>
            <a id="menu" href="#" class="icon">&#9776;</a>
        </div>
    </nav>
</header>

<main>
    <div class="articles_container">
        <div class="articles">
            <br><h2>Press the button to send statistics:</h2><br>
            <form method="POST" action="send_stat.php">
                <input class="button" type="submit" value="Send" name="name">
            </form><br><br>
        </div>
    </div>
</main>

<footer>
    <nav>
        <a href="index.html">Главная</a>
        <a href="reading.html">Чтиво</a>
        <a href="labs.php">Лабы</a>
        <a href="in_developing.html">VST Эффекты</a>
        <a href="in_developing.html">Сэмплы</a>
        <a href="about.html">Об авторе</a>
    </nav>
</footer>


<script src="js/script.js"></script>
</body>
</html>
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
            <a href="about.html">Об авторе</a>reading.html
            <a id="menu" href="#" class="icon">&#9776;</a>
        </div>
    </nav>
</header>

<main>
    <div class="articles_container">
        <div class="articles">
            <?php include_once 'catalogue.php' ?>
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

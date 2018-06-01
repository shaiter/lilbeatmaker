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
            <a href="labs.html">Лабы</a>
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
            <br><h2>Press the button to return on previous page:</h2>
            <form method="POST" action="laba7_script1.php">
                <input class="button" type="submit" value="Back" name="name">
            </form><br>
            <?php
            include("Vst_plugin.php");

            session_start();
            if (isset($_SESSION['value']))
            {
                $value= $_SESSION['value'];
                //echo $value . '<br/>';
                $data = unserialize($value);
                foreach ($data as $item ){
                    $item->print();
                }

            }
            session_destroy();
            ?>
        </div>
    </div>
</main>

<footer>
    <nav>
        <a href="index.html">Главная</a>
        <a href="reading.html">Чтиво</a>
        <a href="labs.html">Лабы</a>
        <a href="in_developing.html">VST Эффекты</a>
        <a href="in_developing.html">Сэмплы</a>
        <a href="about.html">Об авторе</a>
    </nav>
</footer>


<script src="js/script.js"></script>
</body>
</html>
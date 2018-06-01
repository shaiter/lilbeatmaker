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
            <br><h2>Press the button to send the info:</h2><br>
            <form method="POST" action="laba7_script2.php">
                <input class="button" type="submit" value="Send" name="name">
            </form><br><br>
            <?php
            include("Vst_plugin.php");
            include ("laba5_sql.php");

            $data = get_vst_effects($duration,$memory);


            $array = array();

            foreach ($data as $item ){
                echo "№: $item[id] title: $item[title] release date: $item[release_date] version: $item[version] developer: $item[developer] platform: $item[platform] \n";
                $vst = new Vst_plugin($item["title"], $item["release_date"], $item["version"], $item["developer"], $item["platform"]);
                array_push($array, $vst);
            }

            $s = serialize($array);
            session_start();
            $_SESSION['value'] = $s;
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


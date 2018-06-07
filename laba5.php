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

    <div class="in_developing">


        <form action="laba5_add.php" method="post" >
            <p>
                <input type="text" name="title" placeholder="title" required>
                <input type="text" name="release_date" placeholder="release_date" required>
                <input type="text" name="version" placeholder="version" required>
                <input type="text" name="developer" placeholder="developer" required>
                <input type="text" name="platform" placeholder="platform" required>

                <input type="submit" value="Добавить">
            </p>
        </form>
        <?php
        require_once 'laba5_sql.php';
        ?>


        <pre>

            <?php




            $data = get_vst_effects($duration,$memory);


            foreach ($data as $index => $item ){
                echo "№: $item[id] title: $item[title] release date: $item[release_date] version: $item[version] developer: $item[developer] platform: $item[platform] \n";
            }
            echo "Запрос выполнен за: $duration ms\n Израсходаванно памяти: $memory byte";
            ?>
        </pre>



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
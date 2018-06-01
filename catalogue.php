<?php

$link = mysqli_connect('localhost', 'root', 'fuckoff', 'lil_beatmaker');
$link->set_charset("utf8");
$query = "SELECT * FROM vst_effects";
$result = mysqli_query($link, $query);
if($result){
    while($row = mysqli_fetch_array($result)){
        makeCatalogueItem($row);
    }
}
function makeCatalogueItem($item){
    echo '<div class="articles_item">
                <img class="item_image" src="img/'.$item["img"].'" alt="img">
                <h2>'.$item["title"].'</h2>
                <form action="info.php" method="post">            
                    <input type="submit" value="Открыть" name="'.$item["id"].'">
                </form>
            </div>';
}
mysqli_close($link);
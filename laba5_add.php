<?php
/**
 * Created by PhpStorm.
 * User: artemsajter
 * Date: 5/16/18
 * Time: 22:45
 */

require_once 'laba5_sql.php';


if (isset($_POST['title']) && isset($_POST['release_date']) && isset($_POST['version']) && isset($_POST['developer']) && isset($_POST['platform'])) {
    $data = add_vst_effects($duration, $memory, $_POST['title'], $_POST['release_date'], $_POST['version'], $_POST['developer'], $_POST['platform']);

    foreach ($data as $index => $item ){
        echo "№: $item[id] title: $item[title] release date: $item[release_date] version: $item[version] developer: $item[developer] platform: $item[platform] \n";
    }
    echo "Запрос выполнен за: $duration ms\n Израсходаванно памяти: $memory byte";
}


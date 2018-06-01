<?php
/**
 * Created by PhpStorm.
 * User: artemsajter
 * Date: 5/4/18
 * Time: 23:19
 */

function get_vst_effects(&$duration, &$memory) {
    $link = mysqli_connect('localhost','root', 'fuckoff','lil_beatmaker');

    $sql = "SELECT * FROM vst_effects";

    $start = microtime(true);
    $memory1 = memory_get_usage();

    $result = mysqli_query($link, $sql);

    $memory2 = memory_get_usage();
    $memory = abs($memory1 - $memory2);
    $duration = microtime(true) - $start;

    $vst_effects = mysqli_fetch_all($result, 1);

    $link->close();

    return $vst_effects;
}

function add_vst_effects(&$duration, &$memory, $title, $release_dete, $version, $developer, $platform) {
    $link = mysqli_connect('localhost','root', 'fuckoff','lil_beatmaker');
    echo $title, $release_dete, $version, $developer, $platform ;
    $sql = "INSERT INTO `vst_effects`(title, release_date, version, developer, platform)VALUES('$title', '$release_dete', '$version', '$developer', '$platform')";
    //$sql = "INSERT INTO `vst_effects` SET `title` = $title, `release_date` = $release_dete, `version` = $version, `developer` = $developer, `platform` = $platform";
    $sql2 = "SELECT * FROM vst_effects";

    $start = microtime(true);
    $memory1 = memory_get_usage();
    
    $res = mysqli_query($link, $sql);
    $result = mysqli_query($link, $sql2);


    $memory2 = memory_get_usage();
    $memory = abs($memory1 - $memory2);
    $duration = microtime(true) - $start;

    $vst_effects = mysqli_fetch_all($result, 1);

    $link->close();

    return $vst_effects;
}






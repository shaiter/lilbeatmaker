<?php
/**
 * Created by PhpStorm.
 * User: artemsajter
 * Date: 6/6/18
 * Time: 15:50
 */

require_once 'connection.php';

$url = $_SERVER['REQUEST_URI'];
$dtime = date("Y-n-j", $timestamp = time());
$link = mysqli_connect($host, $user, $password, $database);
$query = "INSERT INTO stat(`stat_date`,`stat_url`) VALUES ('$dtime','$url')";
$result = mysqli_query($link,$query);
mysqli_close($link);
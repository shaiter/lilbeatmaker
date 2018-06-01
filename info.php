<?php
/**
 * Created by PhpStorm.
 * User: artemsajter
 * Date: 5/30/18
 * Time: 17:54
 */

include 'Model.php';
include 'View.php';

$model = new Model(key($_POST), "template.html");
$view = new View( $model);
echo $view->output();
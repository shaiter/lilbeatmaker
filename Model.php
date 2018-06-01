<?php
/**
 * Created by PhpStorm.
 * User: artemsajter
 * Date: 5/31/18
 * Time: 08:11
 */

class Model
{
    public function __construct($value, $template){
        $link=mysqli_connect('localhost', 'root', 'fuckoff', 'lil_beatmaker');
        $this->template = $template;
        $id = mysqli_real_escape_string($link,$value);
        $query = "SELECT * FROM vst_effects WHERE id='$id'";
        $result=mysqli_query($link, $query);
        $this->info = mysqli_fetch_row($result);
        mysqli_close($link);
    }
}
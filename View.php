<?php
/**
 * Created by PhpStorm.
 * User: artemsajter
 * Date: 5/31/18
 * Time: 08:12
 */

class View
{

    public function __construct($model) {
        $this->model = $model;
    }

    public function output(){
        $title=$this->model->info[1];
        $release_date=$this->model->info[2];
        $version=$this->model->info[3];
        $developer=$this->model->info[4];
        $platform=$this->model->info[5];
        $img=$this->model->info[6];
        require_once($this->model->template);
    }
}
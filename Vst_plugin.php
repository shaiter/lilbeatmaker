<?php
/**
 * Created by PhpStorm.
 * User: artemsajter
 * Date: 6/1/18
 * Time: 15:42
 */

class Vst_plugin
{
    public $title;

    public $release_date;

    public $version;

    public $developer;

    public $platform;

    public function __construct($title, $release_date, $version, $developer, $platform) {
        $this->title = $title;
        $this->release_date = $release_date;
        $this->version = $version;
        $this->developer = $developer;
        $this->platform = $platform;
    }

    public function print() {
        echo "The \"title\" field value: ".$this->title."<br/>";
        echo "The \"release_date\" field value: ".$this->release_date."<br/>";
        echo "The \"version\" field value: ".$this->version."<br/>";
        echo "The \"developer\" field value: ".$this->developer."<br/>";
        echo "The \"platform\" field value: ".$this->platform."<br/>";
    }
}
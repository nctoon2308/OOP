<?php

class Hinhanh{

    public function __construct($src_param,$alt_param,$width_param,$height_param,$id_param,$class_param)
    {
        $this->src = $src_param;
        $this->alt = $alt_param;
        $this->width = $width_param;
        $this->height = $height_param;
        $this->id = $id_param;
        $this->class = $class_param;
    }

    public $src;
    public $alt;
    public $width;
    public $height;
    public $id;
    public $class;

    public function html(){

        $html = "<img src='$this->src' class='$this->class' id='$this->id' height='$this->height' width='$this->width' alt='$this->alt' />";
        return $html;

    }



}

$img1 = new Hinhanh("test.JPG", "image", "480", "480", "123a", "abc");

echo $img1->html();



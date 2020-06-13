<?php

class Lienket{

    public function __construct($href_param,$title_param,$target_param,$text_param)
    {
        $this->href = $href_param;
        $this->title = $title_param;
        $this->target = $target_param;
        $this->text = $text_param;
    }

    public $href;
    public $title;
    public $target;
    public $text;


    public function html(){

        $html = "<a href='$this->href' title='$this->title' target='$this->target'>$this->text</a>";
        return $html;

    }



}

$lk1 = new Lienket("https://www.facebook.com/ton23.999/", "day la tieu de", "blank", "click vao day");

echo $lk1->html();



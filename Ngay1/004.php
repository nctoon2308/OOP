<?php

// public ( công khai ) có thể truy cập mọi nơi
// protected ( kế thừa ) có tác dụng trong class đó và các class con kế thừa từ nó
// private ( riêng tư ) chỉ có tác dụng trong bản thân class đó

class HoaQua{

    public $ten;

    private $mausac;

    protected $khoiluong;

}

$xoai = new HoaQua();
echo $xoai->ten="xoai";
//$xoai->mausac="vang";
//$xoai->khoiluong=100;
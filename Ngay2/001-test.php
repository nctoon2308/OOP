<?php


// khai niệm kế thừa
// khai báo kế thừa sử dụng extends
// classA extends classB {}
// class con khi kế thừa class B thì sử dụng được phương thức và các thuộc tính
// của class cha có giới hạn truy cập là public và protected

class TraiCay{
    public $ten;
    public $mausac;

    public function __construct($ten_param, $mausac_param)
    {
        $this->ten=$ten_param;
        $this->mausac=$mausac_param;
    }
    Public function  intro()
    {
        echo "qua {$this->ten} mau {$this->mausac}";
    }


}

class DauTay extends TraiCay{

    public $trongluong;

    public function __construct($ten_param, $mausac_param, $trongluong_param)
    {
        $this->ten=$ten_param;
        $this->mausac=$mausac_param;
        $this->trongluong=$trongluong_param;
    }
    Public function  intro()
    {
        echo "qua {$this->ten} mau {$this->mausac} va nang {$this->trongluong} gam";
    }


}

$dautay1 = new  DauTay('dau tay', 'do', '15');
$dautay1->intro();




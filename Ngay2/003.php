<?php

Class DienThoaiCu{

    public $sodienthoai;

    Public function nghe(){
        // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
        echo '<br>'.__METHOD__;
    }

    public function goidien(){
        // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
        echo '<br>'.__METHOD__;
    }

}


//Sử dụng đa kế thừa trong php phải dùng trait

    trait MayTinh{

        public $ip;

        Public function guiEmail(){
            // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
            echo '<br>'.__METHOD__;
        }

        public function office(){
            // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
            echo '<br>'.__METHOD__;
        }

    }

trait Radio{

    public $ip;

    Public function ngheRadio(){
        // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
        echo '<br>'.__METHOD__;
    }

    public function Mp3(){
        // __METHOD__ in ra tên class và tên phương thức đang được gọi đến
        echo '<br>'.__METHOD__;
    }

}


//extends: Kế thừa

class DienThoaiMoi extends DienThoaiCu{

    // nạp trait Maytinh để sử dụng các thuộc tính và phương thức của Maytinh
    // Dienthoaithongminh kế thừa tất cả các thuộc tính và phương thức của Maytinh

    use MayTinh;
    use Radio;

}

$sony = new DienThoaiMoi();

echo "<pre>";
print_r($sony);
echo "</pre>";


// gọi đến phương thức của Dienthoaiphothong
$sony->goidien();

// gọi đến phương thức của trait Maytinh
$sony->guiEmail();

// gọi đến phương thức của trait Mp3
$sony->ngheNhac();

/**
 * PHP từ khóa extends chỉ hỗ trợ đơn kế thừa
 * khi muốn sử dụng đa kế thừa thì sẽ sử dụng trait
 * cho mục đích này
 * để nạp trait các bạn sử dụng từ khóa use trong class
 */


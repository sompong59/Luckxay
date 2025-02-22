<?php
//แยก header เพื่อเรียกใช้ไฟล์เดียวไปทุกหน้า

include 'header.php';

//condition change language สร้างเงื่อนไขเรียกใช้ภาษาต่างๆ 
      if($_SESSION['lang'] =='lao'){
          include 'index_lao.php'; //ภาษาลาว
      }else if ($_SESSION['lang'] =='en'){
          include 'index_en.php'; //ภาษาอังกฤษ
      }
      {
         include 'index_lao.php'; //ภาษาไทย
      }

//devbanban.com จัดทำเพื่อเป็นตัวอย่างง่ายๆ ให้ศึกษาและพัฒนาต่อยอดครับ
    ?>